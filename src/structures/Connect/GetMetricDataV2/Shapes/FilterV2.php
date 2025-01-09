<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterKey
 * @property list<string> $FilterValues
 */
class FilterV2 extends Shape
{
    /**
     * @param array{
     *     FilterKey?: string,
     *     FilterValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
