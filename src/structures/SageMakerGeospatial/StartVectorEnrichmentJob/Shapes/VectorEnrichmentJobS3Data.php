<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property string $S3Uri
 */
class VectorEnrichmentJobS3Data extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string,
     *     S3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
