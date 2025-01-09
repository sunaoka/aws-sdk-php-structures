<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $roleName
 * @property bool $autoLaunch
 * @property list<Shapes\ServerGroupLaunchConfiguration> $serverGroupLaunchConfigurations
 */
class PutAppLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     appId?: string,
     *     roleName?: string,
     *     autoLaunch?: bool,
     *     serverGroupLaunchConfigurations?: list<Shapes\ServerGroupLaunchConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
