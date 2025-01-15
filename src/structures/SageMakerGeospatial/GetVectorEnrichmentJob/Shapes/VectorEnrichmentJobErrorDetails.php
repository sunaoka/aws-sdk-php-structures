<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorMessage
 * @property 'CLIENT_ERROR'|'SERVER_ERROR'|null $ErrorType
 */
class VectorEnrichmentJobErrorDetails extends Shape
{
    /**
     * @param array{
     *     ErrorMessage?: string|null,
     *     ErrorType?: 'CLIENT_ERROR'|'SERVER_ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
