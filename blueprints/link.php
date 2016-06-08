<?php if(!defined('KIRBY')) exit ?>

title: Link
pages: false
files: false
icon: external-link-square
fields:
  title:
    label: Title
    type:  text
  url:
    label: Address
    type: url
  type:
    label: Type
    type: select
    options:
      alternate: Alternate Version
      author: Author
      bookmark: Bookmark
      help: Help
      license: License
      next: Next
      nofollow: No Follow
      prefetch: Pre-Fetch
      prev: Previous
      search: Search
      tag: Tag
  type_info:
    label: Type Info
    type: info
    text: >
      Choose no type, if none of the types below do match your use case:
      
      * **Alternate Version**: Links to an alternate version of the document.
      
      * **Author**: Links to the author of the document.
      
      * **Bookmark**: Permanent URL used for bookmarking.
      
      * **Help**: Links to a help document.
      
      * **License**: Links to copyright information for the document.
      
      * **Next**: The next document in a selection.
      
      * **No Follow**: Links to an unendorsed document, like a paid link.
      
      * **No Referrer**: Specifies that the browser should not send a HTTP referer.
      
      * **Pre-Fetch**: Specifies that the target document should be cached.
      
      * **Previous**: The previous document in a selection.
      
      * **Search**: Links to a search tool for the document.
      
      * **Tag**: A tag (keyword) for the current document.
      
