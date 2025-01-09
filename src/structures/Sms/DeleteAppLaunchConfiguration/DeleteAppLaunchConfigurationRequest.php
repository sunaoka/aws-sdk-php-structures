<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteAppLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class DeleteAppLaunchConfigurationRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
