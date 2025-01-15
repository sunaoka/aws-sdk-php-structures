<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MapMatchingConfig|null $MapMatchingConfig
 * @property ReverseGeocodingConfig|null $ReverseGeocodingConfig
 */
class VectorEnrichmentJobConfig extends Shape
{
    /**
     * @param array{
     *     MapMatchingConfig?: MapMatchingConfig|null,
     *     ReverseGeocodingConfig?: ReverseGeocodingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
