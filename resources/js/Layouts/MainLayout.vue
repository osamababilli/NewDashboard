<template >

<div>

    <TopSection> </TopSection>
    <sidebar> </sidebar>
    <main class="dashboard-main">
     <Nav></Nav>

    <slot />

   <Footer> </Footer>

    </main>
<!--    <BottomSection> </BottomSection>-->

</div>
</template>

<script setup>
import TopSection from './../partial-html/_template-top.vue'
import Sidebar from './../Layouts/_sidebar.vue'
import Footer from './../Layouts/_footer.vue'
// import BottomSection from './../partial-html/_template-bottom.vue'
import osama from './../partial-html/_template-bottom.js'
import Nav from './../Layouts/_nav.vue'
import {onMounted} from "vue";
onMounted(()=>{
// console.log(osama);
    osama.forEach(scriptSrc => {
        const script = document.createElement("script");
        script.src = scriptSrc;  // تعيين مسار السكربت من المصفوفة
        document.body.appendChild(script);

        // التحقق عند اكتمال التحميل
        script.onload = () => {
            console.log(`${scriptSrc} loaded successfully!`);
        };
    });
});

</script>
