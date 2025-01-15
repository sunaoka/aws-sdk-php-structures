<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportErrorDetailsOutput|null $ExportResults
 * @property ExportErrorDetailsOutput|null $ExportSourceImages
 */
class ExportErrorDetails extends Shape
{
    /**
     * @param array{
     *     ExportResults?: ExportErrorDetailsOutput|null,
     *     ExportSourceImages?: ExportErrorDetailsOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
