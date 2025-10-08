<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SummaryOverrideConsolidationConfigurationInput|null $consolidation
 */
class SummaryOverrideConfigurationInput extends Shape
{
    /**
     * @param array{consolidation?: SummaryOverrideConsolidationConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
