# com.hjed.civicrm.memberactions

This extension adds a CiviRule that creates a membership. Its intended 

The extension is licensed under [AGPL-3.0](LICENSE.txt).

Note this extension has not been tested extensively, and whilst I intended to do so in the future in the meantime use
at your own risk.

## Requirements

* PHP v5.4+
* CiviCRM 4.7 or 5.6 (other version may work but haven't been tested)
* CiviRules 2.2

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.hjed.civicrm.memberactions@https://github.com/hjed/com.hjed.civicrm.memberactions/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/hjed/com.hjed.civicrm.memberactions.git
cv en memberactions
```

## Usage

This plugin adds an action "Create a Membership on the Contact" that can be accessed from the normal CiviRules 
action menu. The rule has options to choose which membership type to create and if duplicate memberships should
be created.

## Known Issues

