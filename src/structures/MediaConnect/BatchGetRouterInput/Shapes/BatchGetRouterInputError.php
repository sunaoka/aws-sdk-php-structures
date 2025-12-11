<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Code
 * @property string $Message
 */
class BatchGetRouterInputError extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Code: string,
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
