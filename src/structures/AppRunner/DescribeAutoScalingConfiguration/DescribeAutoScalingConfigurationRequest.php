<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeAutoScalingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingConfigurationArn
 */
class DescribeAutoScalingConfigurationRequest extends Request
{
    /**
     * @param array{AutoScalingConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
