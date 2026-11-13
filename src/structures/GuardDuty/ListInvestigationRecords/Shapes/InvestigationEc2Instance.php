<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $InstanceType
 * @property string|null $InstanceState
 * @property string|null $AvailabilityZone
 * @property string|null $PrivateIpAddress
 * @property string|null $PublicIp
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property string|null $ImageId
 * @property \Aws\Api\DateTimeResult|null $LaunchedAt
 */
class InvestigationEc2Instance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     InstanceType?: string|null,
     *     InstanceState?: string|null,
     *     AvailabilityZone?: string|null,
     *     PrivateIpAddress?: string|null,
     *     PublicIp?: string|null,
     *     VpcId?: string|null,
     *     SubnetId?: string|null,
     *     ImageId?: string|null,
     *     LaunchedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
