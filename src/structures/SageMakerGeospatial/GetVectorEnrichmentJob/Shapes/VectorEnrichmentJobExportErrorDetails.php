<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property 'CLIENT_ERROR'|'SERVER_ERROR' $Type
 */
class VectorEnrichmentJobExportErrorDetails extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     Type?: 'CLIENT_ERROR'|'SERVER_ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
