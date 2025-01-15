<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3BucketName
 * @property string|null $s3KeyPrefix
 */
class S3Logs extends Shape
{
    /**
     * @param array{
     *     s3BucketName?: string|null,
     *     s3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
