<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $imagePipelineArn
 * @property SeverityCounts|null $severityCounts
 */
class ImagePipelineAggregation extends Shape
{
    /**
     * @param array{
     *     imagePipelineArn?: string|null,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
