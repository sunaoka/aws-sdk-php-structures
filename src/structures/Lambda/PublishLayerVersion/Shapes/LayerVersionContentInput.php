<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishLayerVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string $S3Key
 * @property string $S3ObjectVersion
 * @property string $ZipFile
 */
class LayerVersionContentInput extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string,
     *     S3Key?: string,
     *     S3ObjectVersion?: string,
     *     ZipFile?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
