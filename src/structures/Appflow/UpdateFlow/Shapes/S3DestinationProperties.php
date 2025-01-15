<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string|null $bucketPrefix
 * @property S3OutputFormatConfig|null $s3OutputFormatConfig
 */
class S3DestinationProperties extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     bucketPrefix?: string|null,
     *     s3OutputFormatConfig?: S3OutputFormatConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
