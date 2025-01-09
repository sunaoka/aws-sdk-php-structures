<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrieveConfig $retrieveConfig
 * @property RetrieveAndGenerateConfiguration $retrieveAndGenerateConfig
 */
class KnowledgeBaseConfig extends Shape
{
    /**
     * @param array{
     *     retrieveConfig?: RetrieveConfig,
     *     retrieveAndGenerateConfig?: RetrieveAndGenerateConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
