<?php

namespace Sunaoka\Aws\Structures\Textract\CreateAdapterVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Object|null $ManifestS3Object
 */
class AdapterVersionDatasetConfig extends Shape
{
    /**
     * @param array{ManifestS3Object?: S3Object|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
