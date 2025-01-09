<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property IamInstanceProfile $IamInstanceProfile
 * @property string $ImageDescription
 * @property string $ImageId
 * @property string $InstanceId
 * @property string $InstanceState
 * @property string $InstanceType
 * @property string $OutpostArn
 * @property string $LaunchTime
 * @property list<NetworkInterface> $NetworkInterfaces
 * @property string $Platform
 * @property list<ProductCode> $ProductCodes
 * @property list<Tag> $Tags
 */
class InstanceDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     IamInstanceProfile?: IamInstanceProfile,
     *     ImageDescription?: string,
     *     ImageId?: string,
     *     InstanceId?: string,
     *     InstanceState?: string,
     *     InstanceType?: string,
     *     OutpostArn?: string,
     *     LaunchTime?: string,
     *     NetworkInterfaces?: list<NetworkInterface>,
     *     Platform?: string,
     *     ProductCodes?: list<ProductCode>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
