<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array' $type
 * @property string $expression
 * @property 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null $category
 */
class FlowNodeInput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'String'|'Number'|'Boolean'|'Object'|'Array',
     *     expression: string,
     *     category?: 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
