<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorMessage
 * @property 'CLIENT_ERROR'|'SERVER_ERROR' $ErrorType
 */
class VectorEnrichmentJobErrorDetails extends Shape
{
    /**
     * @param array{
     *     ErrorMessage?: string,
     *     ErrorType?: 'CLIENT_ERROR'|'SERVER_ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
