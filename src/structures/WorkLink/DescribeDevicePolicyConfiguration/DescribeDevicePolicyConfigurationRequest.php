<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeDevicePolicyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 */
class DescribeDevicePolicyConfigurationRequest extends Request
{
    /**
     * @param array{FleetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
