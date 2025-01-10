<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $ZipFile
 * @property string $S3Bucket
 * @property string $S3Key
 * @property string $S3ObjectVersion
 * @property string $ImageUri
 * @property string $SourceKMSKeyArn
 */
class FunctionCode extends Shape
{
    /**
     * @param array{
     *     ZipFile?: string|resource|\Psr\Http\Message\StreamInterface,
     *     S3Bucket?: string,
     *     S3Key?: string,
     *     S3ObjectVersion?: string,
     *     ImageUri?: string,
     *     SourceKMSKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
