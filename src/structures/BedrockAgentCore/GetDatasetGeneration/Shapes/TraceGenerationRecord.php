<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TraceSourceConfig|null $sourceConfig
 * @property GenerationSelectionRecord|null $selection
 * @property GenerationSamplingConfig|null $sampling
 * @property GroundTruthConfig|null $groundTruth
 * @property RedactionConfiguration|null $redactionConfiguration
 */
class TraceGenerationRecord extends Shape
{
    /**
     * @param array{
     *     sourceConfig?: TraceSourceConfig|null,
     *     selection?: GenerationSelectionRecord|null,
     *     sampling?: GenerationSamplingConfig|null,
     *     groundTruth?: GroundTruthConfig|null,
     *     redactionConfiguration?: RedactionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
