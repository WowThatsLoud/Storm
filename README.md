# Craft

A starting point for fresh Craft installations

## Installation

1. To install PHP dependencies, run `composer install`
2. Set your configuration in craft/app/config files
3. [Configure your
hostfile](http://www.howtogeek.com/howto/27350/beginner-geek-how-to-edit-your-hosts-file/)
to make [http://craft.dev](http://craft.dev) refer to your
localhost <--- Feel free to use an automated solution in stead of this manual one
4. Go to [http://craft.dev/admin](http://craft.dev/admin) to
log in
5. Log in with your chosen username and password. Change this after logging in!

## Schema definitions

This project uses the [schematic](https://github.com/nerds-and-company/schematic) plugin

You can this to create an export of all fields and sections.

`./vendor/bin/schematic export`

This export will be saved in craft/config/schema.json

The schema can imported with:

`./vendor/bin/schematic import`

Optionally --force can be used to also delete items not included in the import
Warning! --force removes fields and sections that are not in the import.
