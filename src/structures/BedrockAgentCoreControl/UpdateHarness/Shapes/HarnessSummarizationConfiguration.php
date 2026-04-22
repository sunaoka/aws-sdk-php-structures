<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $summaryRatio
 * @property int|null $preserveRecentMessages
 * @property string|null $summarizationSystemPrompt
 */
class HarnessSummarizationConfiguration extends Shape
{
    /**
     * @param array{
     *     summaryRatio?: float|null,
     *     preserveRecentMessages?: int|null,
     *     summarizationSystemPrompt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
