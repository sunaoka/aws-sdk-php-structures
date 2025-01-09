<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListS3Buckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreationDate
 * @property string $Name
 */
class S3BucketInfo extends Shape
{
    /**
     * @param array{
     *     CreationDate?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
