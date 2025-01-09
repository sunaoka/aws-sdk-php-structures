<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketAccessRoleArn
 */
class S3Config extends Shape
{
    /**
     * @param array{BucketAccessRoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
