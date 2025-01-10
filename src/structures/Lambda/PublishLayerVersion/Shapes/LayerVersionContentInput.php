<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishLayerVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string $S3Key
 * @property string $S3ObjectVersion
 * @property string|resource|\Psr\Http\Message\StreamInterface $ZipFile
 */
class LayerVersionContentInput extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string,
     *     S3Key?: string,
     *     S3ObjectVersion?: string,
     *     ZipFile?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
