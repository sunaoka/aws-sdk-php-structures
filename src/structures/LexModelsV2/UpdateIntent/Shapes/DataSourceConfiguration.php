<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpensearchConfiguration $opensearchConfiguration
 * @property QnAKendraConfiguration $kendraConfiguration
 * @property BedrockKnowledgeStoreConfiguration $bedrockKnowledgeStoreConfiguration
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     opensearchConfiguration?: OpensearchConfiguration,
     *     kendraConfiguration?: QnAKendraConfiguration,
     *     bedrockKnowledgeStoreConfiguration?: BedrockKnowledgeStoreConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
