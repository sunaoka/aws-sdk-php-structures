<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftQueryEngineConfiguration $queryEngineConfiguration
 * @property QueryGenerationConfiguration $queryGenerationConfiguration
 * @property list<RedshiftQueryEngineStorageConfiguration> $storageConfigurations
 */
class RedshiftConfiguration extends Shape
{
    /**
     * @param array{
     *     queryEngineConfiguration: RedshiftQueryEngineConfiguration,
     *     queryGenerationConfiguration?: QueryGenerationConfiguration,
     *     storageConfigurations: list<RedshiftQueryEngineStorageConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
