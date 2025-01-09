<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNatGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ProvisionTime
 * @property string $Provisioned
 * @property \Aws\Api\DateTimeResult $RequestTime
 * @property string $Requested
 * @property string $Status
 */
class ProvisionedBandwidth extends Shape
{
    /**
     * @param array{
     *     ProvisionTime?: \Aws\Api\DateTimeResult,
     *     Provisioned?: string,
     *     RequestTime?: \Aws\Api\DateTimeResult,
     *     Requested?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
