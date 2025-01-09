<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property string $s3KeyPrefix
 */
class S3Logs extends Shape
{
    /**
     * @param array{
     *     s3BucketName?: string,
     *     s3KeyPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
