<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property string|null $ObjectKey
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     ObjectKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
