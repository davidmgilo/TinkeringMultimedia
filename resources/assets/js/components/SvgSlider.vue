<template>
    <div>
        <svg width="220" height="220">
            <circle cx="110" cy="110" :r="radi" stroke="green" stroke-width="4" fill="yellow" />
        </svg>
        <div class="slider slider-horizontal">
            <div class="slider-track">
                <div class="slider-selection"></div>
                <div class="slider-track-high" style="right: 0px;"></div>
                <div class="slider-handle max-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="100" :aria-valuenow="radi" tabindex="0"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                radi: '40'
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
