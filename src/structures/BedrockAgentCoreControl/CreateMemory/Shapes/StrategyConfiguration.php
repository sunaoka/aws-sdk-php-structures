<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEMANTIC_OVERRIDE'|'SUMMARY_OVERRIDE'|'USER_PREFERENCE_OVERRIDE'|'SELF_MANAGED'|null $type
 * @property ExtractionConfiguration|null $extraction
 * @property ConsolidationConfiguration|null $consolidation
 * @property SelfManagedConfiguration|null $selfManagedConfiguration
 */
class StrategyConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'SEMANTIC_OVERRIDE'|'SUMMARY_OVERRIDE'|'USER_PREFERENCE_OVERRIDE'|'SELF_MANAGED'|null,
     *     extraction?: ExtractionConfiguration|null,
     *     consolidation?: ConsolidationConfiguration|null,
     *     selfManagedConfiguration?: SelfManagedConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
