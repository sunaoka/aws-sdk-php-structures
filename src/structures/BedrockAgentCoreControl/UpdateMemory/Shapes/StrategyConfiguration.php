<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEMANTIC_OVERRIDE'|'SUMMARY_OVERRIDE'|'USER_PREFERENCE_OVERRIDE'|'SELF_MANAGED'|'EPISODIC_OVERRIDE'|null $type
 * @property ExtractionConfiguration|null $extraction
 * @property ConsolidationConfiguration|null $consolidation
 * @property ReflectionConfiguration|null $reflection
 * @property SelfManagedConfiguration|null $selfManagedConfiguration
 */
class StrategyConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'SEMANTIC_OVERRIDE'|'SUMMARY_OVERRIDE'|'USER_PREFERENCE_OVERRIDE'|'SELF_MANAGED'|'EPISODIC_OVERRIDE'|null,
     *     extraction?: ExtractionConfiguration|null,
     *     consolidation?: ConsolidationConfiguration|null,
     *     reflection?: ReflectionConfiguration|null,
     *     selfManagedConfiguration?: SelfManagedConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
