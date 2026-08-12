<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDescribeUserLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userName
 * @property string|null $namespace
 * @property string|null $userArn
 * @property string $errorCode
 * @property string $message
 */
class BatchDescribeUserLimitsError extends Shape
{
    /**
     * @param array{
     *     userName?: string|null,
     *     namespace?: string|null,
     *     userArn?: string|null,
     *     errorCode: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
