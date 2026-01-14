<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAccountPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaFunctionArn
 * @property string|null $lambdaExecutionRoleArn
 */
class CustomAccountPoolHandler extends Shape
{
    /**
     * @param array{
     *     lambdaFunctionArn: string,
     *     lambdaExecutionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
