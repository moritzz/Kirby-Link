# Kirby-Link

Kirby Plugin to Add External Links and Redirects as Pages.

## Description

This plugin allows to add Pages that trigger a redirect to any other URL. You can use it to add URLs to your Kirby instance that redirect to any other URL, even external ones.

# Installation

## Manual Setup

1. Download the Git repository as a Zip.
2. Unpack the Zip and move contents of resulting directory to `site/plugins/link`.

## Git Setup

1. Open a shell at the root of your Kirby or Kirby Starterkit installation.
2. Run `git submodule add -b master --name blog git@github.com:moritzz/Kirby-Link.git site/plugins/link`

# Example Setup

Let's say you have a crowdfunding running for you project and you want to provide a sort, easy to communicate URL (eg. http://yourdomain.com/wemakeit) rather than a long one from the crowdfunding service (e.d. http://wemakeit.com/projects/your-project-name).

## Instructions

1. Open Kirby Panel.
2. Create a Link page with URL-appendix set to `wemakeit`.
3. Add a title and set Address to `http://wemakeit.com/projects/your-project-name`.

To add the link to the external service to your navigation, set the status of your Link page to visible.

# Version history

- v1.0: First official version