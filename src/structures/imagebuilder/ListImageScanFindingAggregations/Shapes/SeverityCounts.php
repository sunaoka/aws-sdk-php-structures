<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $all
 * @property int|null $critical
 * @property int|null $high
 * @property int|null $medium
 */
class SeverityCounts extends Shape
{
    /**
     * @param array{
     *     all?: int|null,
     *     critical?: int|null,
     *     high?: int|null,
     *     medium?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
