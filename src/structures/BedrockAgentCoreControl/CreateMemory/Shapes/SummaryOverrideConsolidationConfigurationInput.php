<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appendToPrompt
 * @property string $modelId
 */
class SummaryOverrideConsolidationConfigurationInput extends Shape
{
    /**
     * @param array{
     *     appendToPrompt: string,
     *     modelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
