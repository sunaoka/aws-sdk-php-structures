<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListS3Buckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CreationDate
 * @property string|null $Name
 */
class S3BucketInfo extends Shape
{
    /**
     * @param array{
     *     CreationDate?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
