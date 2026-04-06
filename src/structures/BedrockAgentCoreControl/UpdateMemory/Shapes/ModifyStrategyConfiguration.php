<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModifyExtractionConfiguration|null $extraction
 * @property ModifyConsolidationConfiguration|null $consolidation
 * @property ModifyReflectionConfiguration|null $reflection
 * @property ModifySelfManagedConfiguration|null $selfManagedConfiguration
 */
class ModifyStrategyConfiguration extends Shape
{
    /**
     * @param array{
     *     extraction?: ModifyExtractionConfiguration|null,
     *     consolidation?: ModifyConsolidationConfiguration|null,
     *     reflection?: ModifyReflectionConfiguration|null,
     *     selfManagedConfiguration?: ModifySelfManagedConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
