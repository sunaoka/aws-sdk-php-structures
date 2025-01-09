<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateDefaultAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationArn
 */
class UpdateDefaultAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{AutoScalingConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
