<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionArn
 * @property string|null $FunctionPayload
 */
class AwsLambdaTransformation extends Shape
{
    /**
     * @param array{
     *     FunctionArn: string,
     *     FunctionPayload?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
