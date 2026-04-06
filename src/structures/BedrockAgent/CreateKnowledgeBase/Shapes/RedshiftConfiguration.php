<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RedshiftQueryEngineStorageConfiguration> $storageConfigurations
 * @property RedshiftQueryEngineConfiguration $queryEngineConfiguration
 * @property QueryGenerationConfiguration|null $queryGenerationConfiguration
 */
class RedshiftConfiguration extends Shape
{
    /**
     * @param array{
     *     storageConfigurations: list<RedshiftQueryEngineStorageConfiguration>,
     *     queryEngineConfiguration: RedshiftQueryEngineConfiguration,
     *     queryGenerationConfiguration?: QueryGenerationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
