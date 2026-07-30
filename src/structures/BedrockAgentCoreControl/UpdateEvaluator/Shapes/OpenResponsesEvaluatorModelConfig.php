<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property int<1, max>|null $maxOutputTokens
 * @property float|null $temperature
 * @property float|null $topP
 * @property ReasoningConfiguration|null $reasoning
 */
class OpenResponsesEvaluatorModelConfig extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     maxOutputTokens?: int<1, max>|null,
     *     temperature?: float|null,
     *     topP?: float|null,
     *     reasoning?: ReasoningConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
