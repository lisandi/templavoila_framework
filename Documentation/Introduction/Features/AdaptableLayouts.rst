..  Editor configuration
    ...................................................
    * utf-8 with BOM as encoding
    * tab indent with 4 characters for code snippet.
    * optional: soft carriage return preferred.


.. include:: /Includes/MainInclude.txt

================================
Adaptable Layouts
================================

At some point in our work with TemplaVoila we realized that it was possible to come up with a set of standardized page templates and reusable Flexible Content Elements (FCEs) that could be combined to produce custom site designs quickly and consistently.

The TemplaVoila Framework relies upon page templates that can produce a wide range of visual designs while being standardized "under the hood." To accomplish this it uses:

- a system of core files that are enhanced and modified through the use of skins
- CSS to alter the visual appearance from skin to skin
- targeted TypoScript to change the underlying HTML without remapping page templates
- utility FCEs for additional layout and styling options. This provides flexibility in the layout of individual pages within a site while keeping page templates to a minimum.

**All This and TemplaVoila Too**

Since this framework is just a method of using TemplaVoila, you still have all of TemplaVoila's power for creating page templates and FCEs to handle any situation.