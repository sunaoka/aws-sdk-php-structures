<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $all
 * @property int|null $medium
 * @property int|null $high
 * @property int|null $critical
 * @property int|null $low
 * @property int|null $informational
 * @property int|null $untriaged
 */
class SeverityCounts extends Shape
{
    /**
     * @param array{
     *     all?: int|null,
     *     medium?: int|null,
     *     high?: int|null,
     *     critical?: int|null,
     *     low?: int|null,
     *     informational?: int|null,
     *     untriaged?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
