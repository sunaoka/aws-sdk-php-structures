<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VectorEnrichmentJobS3Data|null $S3Data
 */
class VectorEnrichmentJobDataSourceConfigInput extends Shape
{
    /**
     * @param array{S3Data?: VectorEnrichmentJobS3Data|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
