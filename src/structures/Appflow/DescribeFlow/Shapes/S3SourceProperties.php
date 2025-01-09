<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $bucketPrefix
 * @property S3InputFormatConfig $s3InputFormatConfig
 */
class S3SourceProperties extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     bucketPrefix?: string,
     *     s3InputFormatConfig?: S3InputFormatConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
