<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionArn
 * @property string $InvocationSchemaVersion
 * @property array<string, string> $UserArguments
 */
class LambdaInvokeOperation extends Shape
{
    /**
     * @param array{
     *     FunctionArn?: string,
     *     InvocationSchemaVersion?: string,
     *     UserArguments?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
