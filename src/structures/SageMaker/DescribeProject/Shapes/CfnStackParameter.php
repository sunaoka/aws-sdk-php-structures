<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string|null $Value
 */
class CfnStackParameter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
