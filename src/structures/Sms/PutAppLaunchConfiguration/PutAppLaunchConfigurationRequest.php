<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 * @property string|null $roleName
 * @property bool|null $autoLaunch
 * @property list<Shapes\ServerGroupLaunchConfiguration>|null $serverGroupLaunchConfigurations
 */
class PutAppLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     appId?: string|null,
     *     roleName?: string|null,
     *     autoLaunch?: bool|null,
     *     serverGroupLaunchConfigurations?: list<Shapes\ServerGroupLaunchConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
