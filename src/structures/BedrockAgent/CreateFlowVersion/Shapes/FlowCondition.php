<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $expression
 */
class FlowCondition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     expression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
