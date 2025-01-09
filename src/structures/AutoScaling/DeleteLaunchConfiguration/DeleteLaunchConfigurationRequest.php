<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LaunchConfigurationName
 */
class DeleteLaunchConfigurationRequest extends Request
{
    /**
     * @param array{LaunchConfigurationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
