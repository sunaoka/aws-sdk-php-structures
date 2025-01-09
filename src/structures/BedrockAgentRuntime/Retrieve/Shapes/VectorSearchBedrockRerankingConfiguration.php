<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataConfigurationForReranking $metadataConfiguration
 * @property VectorSearchBedrockRerankingModelConfiguration $modelConfiguration
 * @property int $numberOfRerankedResults
 */
class VectorSearchBedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     metadataConfiguration?: MetadataConfigurationForReranking,
     *     modelConfiguration: VectorSearchBedrockRerankingModelConfiguration,
     *     numberOfRerankedResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
