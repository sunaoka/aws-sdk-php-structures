<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrieveConfig|null $retrieveConfig
 * @property RetrieveAndGenerateConfiguration|null $retrieveAndGenerateConfig
 */
class KnowledgeBaseConfig extends Shape
{
    /**
     * @param array{
     *     retrieveConfig?: RetrieveConfig|null,
     *     retrieveAndGenerateConfig?: RetrieveAndGenerateConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
