<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorResponse
 */
class BatchDescribeModelPackageError extends Shape
{
    /**
     * @param array{
     *     ErrorCode: string,
     *     ErrorResponse: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
