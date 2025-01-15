<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNatGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ProvisionTime
 * @property string|null $Provisioned
 * @property \Aws\Api\DateTimeResult|null $RequestTime
 * @property string|null $Requested
 * @property string|null $Status
 */
class ProvisionedBandwidth extends Shape
{
    /**
     * @param array{
     *     ProvisionTime?: \Aws\Api\DateTimeResult|null,
     *     Provisioned?: string|null,
     *     RequestTime?: \Aws\Api\DateTimeResult|null,
     *     Requested?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
