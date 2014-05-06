gj-prefetch
===========

A WordPress plugin to prefetch/prerender the next subsequent blog post.

### Setup

Install as a WordPress plugin && activate.

### Usage

The plugin hooks into `wp_head` just before the closing </head> tag with:

```
<link rel="prefetch" href="http://example.com/previous-post-to-current-post/">
<link rel="prerender" href="http://example.com/previous-post-to-current-post/">
```

This will prefetch/prerender the next older post in the posts queue. If the post is last nothing will be output into wp_head.

### TODO

1) Allow next or previous  
2) Default output hook after the_content displaying featured image and excerpt
3) Admin options to choose additional CPTs this works on (default: 'post')

### License

MIT
