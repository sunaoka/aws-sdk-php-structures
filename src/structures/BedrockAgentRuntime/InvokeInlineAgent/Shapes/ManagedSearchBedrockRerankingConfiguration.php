<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataConfigurationForReranking|null $metadataConfiguration
 * @property ManagedSearchBedrockRerankingModelConfiguration $modelConfiguration
 * @property int<1, 100>|null $numberOfRerankedResults
 */
class ManagedSearchBedrockRerankingConfiguration extends Shape
{
    /**
     * @param array{
     *     metadataConfiguration?: MetadataConfigurationForReranking|null,
     *     modelConfiguration: ManagedSearchBedrockRerankingModelConfiguration,
     *     numberOfRerankedResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
