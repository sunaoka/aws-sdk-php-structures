<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $ImageDescription
 * @property string $InstanceState
 * @property IamInstanceProfile $IamInstanceProfile
 * @property string $InstanceType
 * @property string $OutpostArn
 * @property string $Platform
 * @property list<ProductCode> $ProductCodes
 * @property list<string> $Ec2NetworkInterfaceUids
 */
class Ec2Instance extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     ImageDescription?: string,
     *     InstanceState?: string,
     *     IamInstanceProfile?: IamInstanceProfile,
     *     InstanceType?: string,
     *     OutpostArn?: string,
     *     Platform?: string,
     *     ProductCodes?: list<ProductCode>,
     *     Ec2NetworkInterfaceUids?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
