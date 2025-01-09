<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeMovingAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'movingToVpc'|'restoringToClassic' $MoveStatus
 * @property string $PublicIp
 */
class MovingAddressStatus extends Shape
{
    /**
     * @param array{
     *     MoveStatus?: 'movingToVpc'|'restoringToClassic',
     *     PublicIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
