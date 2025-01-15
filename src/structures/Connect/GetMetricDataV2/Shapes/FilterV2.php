<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FilterKey
 * @property list<string>|null $FilterValues
 */
class FilterV2 extends Shape
{
    /**
     * @param array{
     *     FilterKey?: string|null,
     *     FilterValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
