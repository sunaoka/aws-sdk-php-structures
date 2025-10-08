<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAccountPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lambdaExecutionRoleArn
 * @property string $lambdaFunctionArn
 */
class CustomAccountPoolHandler extends Shape
{
    /**
     * @param array{
     *     lambdaExecutionRoleArn?: string|null,
     *     lambdaFunctionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
