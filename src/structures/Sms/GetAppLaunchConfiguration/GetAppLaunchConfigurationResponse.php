<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppLaunchConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appId
 * @property string $roleName
 * @property bool $autoLaunch
 * @property list<Shapes\ServerGroupLaunchConfiguration> $serverGroupLaunchConfigurations
 */
class GetAppLaunchConfigurationResponse extends Response
{
}
