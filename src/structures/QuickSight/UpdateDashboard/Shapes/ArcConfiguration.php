<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ArcAngle
 * @property 'SMALL'|'MEDIUM'|'LARGE' $ArcThickness
 */
class ArcConfiguration extends Shape
{
    /**
     * @param array{
     *     ArcAngle?: double,
     *     ArcThickness?: 'SMALL'|'MEDIUM'|'LARGE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
