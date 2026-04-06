<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpensearchConfiguration|null $opensearchConfiguration
 * @property QnAKendraConfiguration|null $kendraConfiguration
 * @property BedrockKnowledgeStoreConfiguration|null $bedrockKnowledgeStoreConfiguration
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     opensearchConfiguration?: OpensearchConfiguration|null,
     *     kendraConfiguration?: QnAKendraConfiguration|null,
     *     bedrockKnowledgeStoreConfiguration?: BedrockKnowledgeStoreConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
