<template>
  <div>
    <button class="btn btn-primary ml-4" @click="followUser">{{ buttonText }}</button>
  </div>
</template>

<script>
export default {
  props: {
    userId: String,
    follows: String
  },
  data() {
    return {
      status: this.follows
    };
  },
  methods: {
    async followUser() {
      try {
        const { data } = await axios.post(`/follow/${this.userId}`);
        this.status = !this.status;
      } catch (error) {
        if (error.response.status === 401) {
          window.location = "/login";
        }
      }
    }
  },
  computed: {
    buttonText() {
      return this.status ? "Unfollow" : "Follow";
    }
  }
};
</script>
