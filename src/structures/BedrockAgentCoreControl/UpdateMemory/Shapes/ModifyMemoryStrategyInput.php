<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryStrategyId
 * @property string|null $description
 * @property list<string>|null $namespaces
 * @property ModifyStrategyConfiguration|null $configuration
 */
class ModifyMemoryStrategyInput extends Shape
{
    /**
     * @param array{
     *     memoryStrategyId: string,
     *     description?: string|null,
     *     namespaces?: list<string>|null,
     *     configuration?: ModifyStrategyConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
