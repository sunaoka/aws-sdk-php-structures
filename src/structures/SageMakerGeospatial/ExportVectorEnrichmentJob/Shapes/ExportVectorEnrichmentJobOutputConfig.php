<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VectorEnrichmentJobS3Data $S3Data
 */
class ExportVectorEnrichmentJobOutputConfig extends Shape
{
    /**
     * @param array{S3Data: VectorEnrichmentJobS3Data} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
