<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property string $S3Uri
 */
class ExportS3DataInput extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     S3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
