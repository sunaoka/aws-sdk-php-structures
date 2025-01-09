<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageBuildVersionArn
 * @property SeverityCounts $severityCounts
 */
class ImageAggregation extends Shape
{
    /**
     * @param array{
     *     imageBuildVersionArn?: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
