<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $ImageDescription
 * @property string|null $InstanceState
 * @property IamInstanceProfile|null $IamInstanceProfile
 * @property string|null $InstanceType
 * @property string|null $OutpostArn
 * @property string|null $Platform
 * @property list<ProductCode>|null $ProductCodes
 * @property list<string>|null $Ec2NetworkInterfaceUids
 */
class Ec2Instance extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     ImageDescription?: string|null,
     *     InstanceState?: string|null,
     *     IamInstanceProfile?: IamInstanceProfile|null,
     *     InstanceType?: string|null,
     *     OutpostArn?: string|null,
     *     Platform?: string|null,
     *     ProductCodes?: list<ProductCode>|null,
     *     Ec2NetworkInterfaceUids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
