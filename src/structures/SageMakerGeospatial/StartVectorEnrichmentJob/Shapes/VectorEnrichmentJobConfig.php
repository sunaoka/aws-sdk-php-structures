<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MapMatchingConfig $MapMatchingConfig
 * @property ReverseGeocodingConfig $ReverseGeocodingConfig
 */
class VectorEnrichmentJobConfig extends Shape
{
    /**
     * @param array{
     *     MapMatchingConfig?: MapMatchingConfig,
     *     ReverseGeocodingConfig?: ReverseGeocodingConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
