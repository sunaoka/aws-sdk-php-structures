<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $XAttributeName
 * @property string $YAttributeName
 */
class ReverseGeocodingConfig extends Shape
{
    /**
     * @param array{
     *     XAttributeName: string,
     *     YAttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
