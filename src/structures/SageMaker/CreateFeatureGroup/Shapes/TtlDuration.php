<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Seconds'|'Minutes'|'Hours'|'Days'|'Weeks' $Unit
 * @property int $Value
 */
class TtlDuration extends Shape
{
    /**
     * @param array{
     *     Unit?: 'Seconds'|'Minutes'|'Hours'|'Days'|'Weeks',
     *     Value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
