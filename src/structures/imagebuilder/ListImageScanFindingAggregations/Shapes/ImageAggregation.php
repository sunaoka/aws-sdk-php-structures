<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $imageBuildVersionArn
 * @property SeverityCounts|null $severityCounts
 */
class ImageAggregation extends Shape
{
    /**
     * @param array{
     *     imageBuildVersionArn?: string|null,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
