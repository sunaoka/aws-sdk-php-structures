<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TraceSourceConfig $sourceConfig
 * @property GenerationSelection|null $selection
 * @property GenerationSamplingConfig|null $sampling
 * @property GroundTruthConfig|null $groundTruth
 * @property RedactionConfiguration|null $redactionConfiguration
 */
class TraceGenerationSource extends Shape
{
    /**
     * @param array{
     *     sourceConfig: TraceSourceConfig,
     *     selection?: GenerationSelection|null,
     *     sampling?: GenerationSamplingConfig|null,
     *     groundTruth?: GroundTruthConfig|null,
     *     redactionConfiguration?: RedactionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
