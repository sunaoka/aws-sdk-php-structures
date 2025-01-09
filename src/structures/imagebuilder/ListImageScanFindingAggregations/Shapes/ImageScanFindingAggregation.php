<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountAggregation $accountAggregation
 * @property ImageAggregation $imageAggregation
 * @property ImagePipelineAggregation $imagePipelineAggregation
 * @property VulnerabilityIdAggregation $vulnerabilityIdAggregation
 */
class ImageScanFindingAggregation extends Shape
{
    /**
     * @param array{
     *     accountAggregation?: AccountAggregation,
     *     imageAggregation?: ImageAggregation,
     *     imagePipelineAggregation?: ImagePipelineAggregation,
     *     vulnerabilityIdAggregation?: VulnerabilityIdAggregation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
