<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportErrorDetailsOutput $ExportResults
 * @property ExportErrorDetailsOutput $ExportSourceImages
 */
class ExportErrorDetails extends Shape
{
    /**
     * @param array{
     *     ExportResults?: ExportErrorDetailsOutput,
     *     ExportSourceImages?: ExportErrorDetailsOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
