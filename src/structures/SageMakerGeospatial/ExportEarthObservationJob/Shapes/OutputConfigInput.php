<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExportS3DataInput $S3Data
 */
class OutputConfigInput extends Shape
{
    /**
     * @param array{S3Data: ExportS3DataInput} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
