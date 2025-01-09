<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FailureCode
 * @property string $FailureReason
 */
class JobFailure extends Shape
{
    /**
     * @param array{
     *     FailureCode?: string,
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
