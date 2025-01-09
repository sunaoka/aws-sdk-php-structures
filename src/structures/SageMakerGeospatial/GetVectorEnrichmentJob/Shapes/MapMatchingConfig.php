<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdAttributeName
 * @property string $TimestampAttributeName
 * @property string $XAttributeName
 * @property string $YAttributeName
 */
class MapMatchingConfig extends Shape
{
    /**
     * @param array{
     *     IdAttributeName: string,
     *     TimestampAttributeName: string,
     *     XAttributeName: string,
     *     YAttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
