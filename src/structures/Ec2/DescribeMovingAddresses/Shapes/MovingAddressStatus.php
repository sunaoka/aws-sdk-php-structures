<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMovingAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'movingToVpc'|'restoringToClassic'|null $MoveStatus
 * @property string|null $PublicIp
 */
class MovingAddressStatus extends Shape
{
    /**
     * @param array{
     *     MoveStatus?: 'movingToVpc'|'restoringToClassic'|null,
     *     PublicIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
