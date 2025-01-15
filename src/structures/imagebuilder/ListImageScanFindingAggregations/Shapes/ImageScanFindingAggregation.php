<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountAggregation|null $accountAggregation
 * @property ImageAggregation|null $imageAggregation
 * @property ImagePipelineAggregation|null $imagePipelineAggregation
 * @property VulnerabilityIdAggregation|null $vulnerabilityIdAggregation
 */
class ImageScanFindingAggregation extends Shape
{
    /**
     * @param array{
     *     accountAggregation?: AccountAggregation|null,
     *     imageAggregation?: ImageAggregation|null,
     *     imagePipelineAggregation?: ImagePipelineAggregation|null,
     *     vulnerabilityIdAggregation?: VulnerabilityIdAggregation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
