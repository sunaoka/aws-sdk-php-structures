<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $all
 * @property int|null $medium
 * @property int|null $high
 * @property int|null $critical
 */
class SeverityCounts extends Shape
{
    /**
     * @param array{
     *     all?: int|null,
     *     medium?: int|null,
     *     high?: int|null,
     *     critical?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
