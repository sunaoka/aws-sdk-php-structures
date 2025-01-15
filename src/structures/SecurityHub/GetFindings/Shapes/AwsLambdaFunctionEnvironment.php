<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Variables
 * @property AwsLambdaFunctionEnvironmentError|null $Error
 */
class AwsLambdaFunctionEnvironment extends Shape
{
    /**
     * @param array{
     *     Variables?: array<string, string>|null,
     *     Error?: AwsLambdaFunctionEnvironmentError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
