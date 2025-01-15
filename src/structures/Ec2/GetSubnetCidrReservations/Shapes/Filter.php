<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSubnetCidrReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $Values
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
