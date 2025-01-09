<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnetCidrReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetCidrReservationId
 * @property string $SubnetId
 * @property string $Cidr
 * @property 'prefix'|'explicit' $ReservationType
 * @property string $OwnerId
 * @property string $Description
 * @property list<Tag> $Tags
 */
class SubnetCidrReservation extends Shape
{
    /**
     * @param array{
     *     SubnetCidrReservationId?: string,
     *     SubnetId?: string,
     *     Cidr?: string,
     *     ReservationType?: 'prefix'|'explicit',
     *     OwnerId?: string,
     *     Description?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
