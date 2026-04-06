<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MemoryStrategyInput>|null $addMemoryStrategies
 * @property list<ModifyMemoryStrategyInput>|null $modifyMemoryStrategies
 * @property list<DeleteMemoryStrategyInput>|null $deleteMemoryStrategies
 */
class ModifyMemoryStrategies extends Shape
{
    /**
     * @param array{
     *     addMemoryStrategies?: list<MemoryStrategyInput>|null,
     *     modifyMemoryStrategies?: list<ModifyMemoryStrategyInput>|null,
     *     deleteMemoryStrategies?: list<DeleteMemoryStrategyInput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
