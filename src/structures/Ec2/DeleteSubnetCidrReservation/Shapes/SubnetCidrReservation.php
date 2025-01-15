<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSubnetCidrReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetCidrReservationId
 * @property string|null $SubnetId
 * @property string|null $Cidr
 * @property 'prefix'|'explicit'|null $ReservationType
 * @property string|null $OwnerId
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class SubnetCidrReservation extends Shape
{
    /**
     * @param array{
     *     SubnetCidrReservationId?: string|null,
     *     SubnetId?: string|null,
     *     Cidr?: string|null,
     *     ReservationType?: 'prefix'|'explicit'|null,
     *     OwnerId?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
