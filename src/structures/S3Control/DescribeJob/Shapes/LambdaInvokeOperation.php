<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionArn
 * @property string|null $InvocationSchemaVersion
 * @property array<string, string>|null $UserArguments
 */
class LambdaInvokeOperation extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string|null,
     *     InvocationSchemaVersion?: string|null,
     *     UserArguments?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
