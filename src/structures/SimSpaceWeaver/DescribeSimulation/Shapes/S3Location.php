<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKey
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
