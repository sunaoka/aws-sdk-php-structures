<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $bucketPrefix
 * @property UpsolverS3OutputFormatConfig $s3OutputFormatConfig
 */
class UpsolverDestinationProperties extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     bucketPrefix?: string,
     *     s3OutputFormatConfig: UpsolverS3OutputFormatConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
