<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VectorSearchBedrockRerankingModelConfiguration $modelConfiguration
 * @property int<1, 100>|null $numberOfRerankedResults
 * @property MetadataConfigurationForReranking|null $metadataConfiguration
 */
class VectorSearchBedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     modelConfiguration: VectorSearchBedrockRerankingModelConfiguration,
     *     numberOfRerankedResults?: int<1, 100>|null,
     *     metadataConfiguration?: MetadataConfigurationForReranking|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
