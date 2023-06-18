# #! code Views Examples

An example module that installs some example views and content.

This module assumes that you have installed the site using the standard install
profile. You will see errors if you install the module on sites that do not
contain the expected fields that are installed through this profile.

Created by Phil Norton at https://www.hashbangcode.com/.

# Views Available

The following views are installed when this module is installed. They are all
available as menu links in the "Main navigation" menu.

## Filter

A list of tags that can be filtered using a single filter in a views exposed
form.

- Path /example-tags-list

## Contextual filter

A list of tags that can be filtered using a contextual filter. An attached view
allows the contextual filter to be set.

- Path /example-tags-contextual-filter

## Relationship

A view that demonstrates the use of view relationships. In this case the
relationship of User is added so that a filter can be created to look at the
role of the user.

- Path /example-relationship

## Display Modes

A view that demonstrates the different types of display modes available.

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

Shows a view with a number of different exposed filters, this includes the
following filters:

- A grouped filter to select between published and unpublished articles.
- A body and title field to search for content in those fields.
- A combined fields filter that will search for content in both the body and
title fields.
- A date range filter, which allows for time offsets to be added.
- A taxonomy tag filter, as a select list.
- The ability to sort the view by date created, title, or published status.

The views ajax mode is enabled so that the view updates without reloading the
page.

- Path /example-exposed-form

## Bulk Operations

This view shows how to create a bulk operations form in views.

- Path /example-bulk-operations

## Advanced

A view to show some of the advanced settings in action, like time based query
caching, aggregation, distinct, ajax display, and other query settings.

To make use of the views tags a hook called
`hashbangcode_views_examples_query_hashbangcode_query_tag_alter` has been
created that will hide node 1.

- Path /example-advanced-page
