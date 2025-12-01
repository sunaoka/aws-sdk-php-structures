<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataConfigurationForReranking|null $metadataConfiguration
 * @property VectorSearchBedrockRerankingModelConfiguration $modelConfiguration
 * @property int<1, 100>|null $numberOfRerankedResults
 */
class VectorSearchBedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     metadataConfiguration?: MetadataConfigurationForReranking|null,
     *     modelConfiguration: VectorSearchBedrockRerankingModelConfiguration,
     *     numberOfRerankedResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
