<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property 'ODCR'|'CRG'|null $Type
 */
class CapacityReservation extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Type?: 'ODCR'|'CRG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
