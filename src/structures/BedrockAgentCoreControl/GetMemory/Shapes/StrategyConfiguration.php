<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEMANTIC_OVERRIDE'|'SUMMARY_OVERRIDE'|'USER_PREFERENCE_OVERRIDE'|null $type
 * @property ExtractionConfiguration|null $extraction
 * @property ConsolidationConfiguration|null $consolidation
 */
class StrategyConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'SEMANTIC_OVERRIDE'|'SUMMARY_OVERRIDE'|'USER_PREFERENCE_OVERRIDE'|null,
     *     extraction?: ExtractionConfiguration|null,
     *     consolidation?: ConsolidationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
