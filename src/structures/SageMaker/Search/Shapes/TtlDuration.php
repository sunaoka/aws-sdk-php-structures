<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Seconds'|'Minutes'|'Hours'|'Days'|'Weeks'|null $Unit
 * @property int<1, max>|null $Value
 */
class TtlDuration extends Shape
{
    /**
     * @param array{
     *     Unit?: 'Seconds'|'Minutes'|'Hours'|'Days'|'Weeks'|null,
     *     Value?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
