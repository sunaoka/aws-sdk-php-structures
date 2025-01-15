<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property 'CLIENT_ERROR'|'SERVER_ERROR'|null $Type
 */
class VectorEnrichmentJobExportErrorDetails extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Type?: 'CLIENT_ERROR'|'SERVER_ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
