<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $all
 * @property int $critical
 * @property int $high
 * @property int $medium
 */
class SeverityCounts extends Shape
{
    /**
     * @param array{
     *     all?: int,
     *     critical?: int,
     *     high?: int,
     *     medium?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
