# #! code Views Examples

An example module that installs some example Views and content to show how
to use Views in different ways to display content.

This module assumes that you have installed the site using the standard install
profile. You will see errors if you install the module on sites that do not
contain the expected fields that are installed through this profile.

This module will work on Drupal 9+.

Created by Phil Norton at https://www.hashbangcode.com/.

# Views Available

The following Views are installed when this module is installed. They are all
available as menu links in the "Main navigation" menu.

## Filter

A list of tags that can be filtered using a single filter in a Views exposed
form.

- Path /example-tags-list

## Contextual filter

A list of tags that can be filtered using a contextual filter. An attached View
allows the contextual filter to be set.

- Path /example-tags-contextual-filter

## Relationship

A View that demonstrates the use of View relationships. In this case the
relationship of User is added so that a filter can be created to look at the
role of the user.

- Path /example-relationship

## Display Modes

A View that demonstrates the different types of display modes available. The
display modes are as follows.

### Page Display

This is a page display with an attachment display at the bottom of the output.
This is in order to show both the page and attachment displays working together.

Also attached to this page is a feed display mode.

- Path /example-display-modes-page

### Feed Display

Attached to the page display mode, this is an example of an RSS feed.

- Path /example-display-modes-feed

### Embed Feed Display

The embed display mode can't be shown on its own. It is intended to be injected
into other elements on the site using the `views_embed_view()` function. To
show this in action a controller has been created that will render this display
mode.

- Path /example-display-modes-embed

## Exposed Form

Shows a View with a number of different exposed filters, this includes the
following filters:

- A grouped filter to select between published and unpublished articles.
- A body and title field to search for content in those fields.
- A combined fields filter that will search for content in both the body and
title fields.
- A date range filter, which allows for time offsets to be added.
- A taxonomy tag filter, as a select list.
- The ability to sort the View by date created, title, or published status.

The Views ajax mode is enabled so that the page updates without reloading the
page.

- Path /example-exposed-form

## Bulk Operations

This View shows how to create a bulk operations form in Views.

- Path /example-bulk-operations

## Advanced

A View to show some of the advanced settings in action, like time based query
caching, aggregation, distinct, ajax display, and other query settings.

To make use of the Views tags a hook called
`hashbangcode_views_examples_query_hashbangcode_query_tag_alter` has been
created that will hide node 1.

- Path /example-advanced-page

# Contributing

If you want to contribute to this module or add extra examples then please do.
The [Features](https://www.drupal.org/project/features) module was used to export the View configurations, which makes
generating the configuration easy.
