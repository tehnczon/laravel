<template>
  <div>
    <!-- Title for the Products Table -->
    <h2>Product List</h2>
    <v-data-table
      :headers="headersProducts"
      :items="products"
      :items-per-page="5"
      class="elevation-1"
    ></v-data-table>

    <!-- Title for the Categories Table -->
    <h2>Category List</h2>
    <v-data-table
      :headers="headersCategories"
      :items="categories"
      :items-per-page="5"
      class="elevation-1"
    ></v-data-table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      // Headers for products table
      headersProducts: [
        { text: 'ID', align: 'start', sortable: false, value: 'id' },
        { text: 'Name', value: 'name' },
        { text: 'Description', value: 'description' },
        { text: 'Price', value: 'price' },
      ],
      // Headers for categories table
      headersCategories: [
        { text: 'ID', align: 'start', sortable: false, value: 'id' },
        { text: 'Name', value: 'name' },
      ],
      // Data for products and categories
      products: [],
      categories: [],
    };
  },
  methods: {
    // Fetch data for both products and categories
    getData() {
      // Fetch products
      this.$axios.get('http://localhost/product/index')
        .then(response => {
          console.log(response.data);
          this.products = response.data;
        })
        .catch(error => {
          console.error(error);
        });

      // Fetch categories
      this.$axios.get('http://localhost/category/index')
        .then(response => {
          console.log(response.data);
          this.categories = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
  mounted() {
    // Call getData on mounted to fetch both products and categories
    this.getData();
  },
};
</script>

<style scoped>
/* Add any custom styles here */
h2 {
  margin-top: 20px;
  font-size: 24px;
  color: #333;
  text-align: center;
}
</style>
