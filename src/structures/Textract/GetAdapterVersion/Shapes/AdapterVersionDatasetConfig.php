<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapterVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object $ManifestS3Object
 */
class AdapterVersionDatasetConfig extends Shape
{
    /**
     * @param array{ManifestS3Object?: S3Object} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
