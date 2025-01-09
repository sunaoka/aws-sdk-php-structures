<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataConfigurationForReranking $metadataConfiguration
 * @property VectorSearchBedrockRerankingModelConfiguration $modelConfiguration
 * @property int<1, 100> $numberOfRerankedResults
 */
class VectorSearchBedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     metadataConfiguration?: MetadataConfigurationForReranking,
     *     modelConfiguration: VectorSearchBedrockRerankingModelConfiguration,
     *     numberOfRerankedResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
