<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Variables
 * @property AwsLambdaFunctionEnvironmentError $Error
 */
class AwsLambdaFunctionEnvironment extends Shape
{
    /**
     * @param array{
     *     Variables?: array<string, string>,
     *     Error?: AwsLambdaFunctionEnvironmentError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
