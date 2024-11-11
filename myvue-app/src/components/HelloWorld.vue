<template>
  <v-data-table
    :headers="headers"
    :items="products"
    :items-per-page="5"
    class="elevation-1"
  ></v-data-table>
</template>
<script>
  export default {
    data () {
      return {
        headers: [
          {
            text: 'ID',
            align: 'start',
            sortable: false,
            value: 'id',
          },
          { text: 'Name', value: 'name'},
          { text: 'Description', value: 'description' },
          { text: 'Price', value: 'price' }
        ],
        products: [

        ],
      }
    },
    methods: {
      getData(){
        this.$axios.get('http://localhost/product/index')
        .then(response => {
          console.log(response.data)
          this.products = response.data;
        })
        .catch(error => {
          console.log(error)
        })
      }
    },
    mounted() {
      this.getData();
    }
  }
</script>
