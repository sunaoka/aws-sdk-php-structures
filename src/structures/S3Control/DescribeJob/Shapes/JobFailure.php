<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureCode
 * @property string|null $FailureReason
 */
class JobFailure extends Shape
{
    /**
     * @param array{
     *     FailureCode?: string|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
