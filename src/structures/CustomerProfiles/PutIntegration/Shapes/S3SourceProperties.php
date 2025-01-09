<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $BucketPrefix
 */
class S3SourceProperties extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     BucketPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
