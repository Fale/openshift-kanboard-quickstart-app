openshift-kanboard-quickstart-app
=================================

QuickStart for Kanboard

This quickstart will set up an instance automatically.

By default the quickstart will pull the most recent version of kanboard on first run.
On subsequent runs it will not be modified unless the version that you wish to update
to is explicitly specified in the OpenShift environment variable OPENSHIFT_KANBOARD_VERSION.
To set this variable, use the following command:

    rhc env set OPENSHIFT_KANBOARD_VERSION=<VERSION> -a <APP NAME>

Then commit and push.
