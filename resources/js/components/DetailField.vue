<template>

 <div>
    <div v-for="(item, key) in items" v-bind:key="item" :title="this.title" :description="this.description" @click="toggleExpansion(key)">
        
        <div :style="headerStyles">
            <a href="#" :style="headerTextStyles" class="mb-1 p-4 no-underline flex justify-between">
                <strong>{{ item[title] }}</strong>
                <span v-if="!isExpanded(key)">&#10133;</span>
                <span v-if="isExpanded(key)">&#10134;</span>
            </a>
        </div>

        <div class="tab__content p-2" v-show="isExpanded(key)" v-html="item[description]"></div>
                   
    </div>
</div>
            
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    data () {
        return {
            expandedGroup: [],
            items: this.field.data,
            isActive: null,
            title: this.field.title,
            description: this.field.description
        }
  },
  methods: {
    isExpanded(key) {
    	return this.expandedGroup.indexOf(key) !== -1;
    },
    toggleExpansion(key) {
    	if (this.isExpanded(key))
      	    this.expandedGroup.splice(this.expandedGroup.indexOf(key), 1);
        else
      	    this.expandedGroup.push(key);
    }
  },
   computed: {
    headerStyles() {
      return {
        "background-color": "aliceblue"//this.field.titleBgColor,
      };
    },
    headerTextStyles() {
      return {
        "color": "#7c858e"//this.field.titleColor
      };
    }
  }

}
</script>