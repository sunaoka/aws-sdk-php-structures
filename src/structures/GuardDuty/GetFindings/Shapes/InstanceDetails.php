<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property IamInstanceProfile|null $IamInstanceProfile
 * @property string|null $ImageDescription
 * @property string|null $ImageId
 * @property string|null $InstanceId
 * @property string|null $InstanceState
 * @property string|null $InstanceType
 * @property string|null $OutpostArn
 * @property string|null $LaunchTime
 * @property list<NetworkInterface>|null $NetworkInterfaces
 * @property string|null $Platform
 * @property list<ProductCode>|null $ProductCodes
 * @property list<Tag>|null $Tags
 */
class InstanceDetails extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     IamInstanceProfile?: IamInstanceProfile|null,
     *     ImageDescription?: string|null,
     *     ImageId?: string|null,
     *     InstanceId?: string|null,
     *     InstanceState?: string|null,
     *     InstanceType?: string|null,
     *     OutpostArn?: string|null,
     *     LaunchTime?: string|null,
     *     NetworkInterfaces?: list<NetworkInterface>|null,
     *     Platform?: string|null,
     *     ProductCodes?: list<ProductCode>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
