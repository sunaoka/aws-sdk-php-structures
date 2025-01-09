<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $bucketPrefix
 * @property S3OutputFormatConfig $s3OutputFormatConfig
 */
class S3DestinationProperties extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     bucketPrefix?: string,
     *     s3OutputFormatConfig?: S3OutputFormatConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
