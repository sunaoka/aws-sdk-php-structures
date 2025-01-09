<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imagePipelineArn
 * @property SeverityCounts $severityCounts
 */
class ImagePipelineAggregation extends Shape
{
    /**
     * @param array{
     *     imagePipelineArn?: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
