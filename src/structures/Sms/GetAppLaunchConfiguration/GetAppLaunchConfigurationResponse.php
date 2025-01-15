<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppLaunchConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $appId
 * @property string|null $roleName
 * @property bool|null $autoLaunch
 * @property list<Shapes\ServerGroupLaunchConfiguration>|null $serverGroupLaunchConfigurations
 */
class GetAppLaunchConfigurationResponse extends Response
{
}
