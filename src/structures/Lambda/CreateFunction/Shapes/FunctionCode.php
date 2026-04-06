<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ZipFile
 * @property string|null $S3Bucket
 * @property string|null $S3Key
 * @property string|null $S3ObjectVersion
 * @property string|null $ImageUri
 */
class FunctionCode extends Shape
{
    /**
     * @param array{
     *     ZipFile?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     S3Bucket?: string|null,
     *     S3Key?: string|null,
     *     S3ObjectVersion?: string|null,
     *     ImageUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
