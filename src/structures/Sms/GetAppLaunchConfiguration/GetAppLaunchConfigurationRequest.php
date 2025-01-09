<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class GetAppLaunchConfigurationRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
