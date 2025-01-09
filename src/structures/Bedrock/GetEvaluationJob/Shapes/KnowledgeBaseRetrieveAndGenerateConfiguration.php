<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $modelArn
 * @property KnowledgeBaseRetrievalConfiguration $retrievalConfiguration
 * @property GenerationConfiguration $generationConfiguration
 * @property OrchestrationConfiguration $orchestrationConfiguration
 */
class KnowledgeBaseRetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     modelArn: string,
     *     retrievalConfiguration?: KnowledgeBaseRetrievalConfiguration,
     *     generationConfiguration?: GenerationConfiguration,
     *     orchestrationConfiguration?: OrchestrationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
