..  Editor configuration
    ...................................................
    * utf-8 with BOM as encoding
    * tab indent with 4 characters for code snippet.
    * optional: soft carriage return preferred.


.. include:: /Includes/MainInclude.txt

================================
What does it do?
================================

The TemplaVoila Framework provides developers with a code base and set of best practices for producing any site design in TYPO3 quickly, easily and consistently. It also makes it easy to reuse code from project to project because of its consistent structure.

The Framework allows content editors to change the original layout using the columns and modules provided. This means they can often change a page layout without having to call a developer for a new template.

================================
In the beginning, there was TypoScript
================================

There are four templating approaches used to produce TYPO3 sites.

1. Pure TypoScript
2. Marker-based templates where the site builder places markers in HTML files which are parsed by TYPO3.
3. TemplaVoila which uses a mapping interface to inject dynamic content into HTML templates.
4. Fluid template language.

**A Hybrid Approach**

This framework uses a combination of the TypoScript and TemplaVoila approaches. TemplaVoila is the templating engine, but TypoScript is used to modify the HTML structure of the core templates and produce output for significant areas of the design.

This leverages the benefits of both approaches. You keep the strong points of TemplaVoila (particularly flexible content elements) while keeping the mapping and remapping of templates to a minimum by strategically using TypoScript.
