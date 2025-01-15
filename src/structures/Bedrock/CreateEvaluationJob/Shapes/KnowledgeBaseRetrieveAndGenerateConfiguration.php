<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $modelArn
 * @property KnowledgeBaseRetrievalConfiguration|null $retrievalConfiguration
 * @property GenerationConfiguration|null $generationConfiguration
 * @property OrchestrationConfiguration|null $orchestrationConfiguration
 */
class KnowledgeBaseRetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     modelArn: string,
     *     retrievalConfiguration?: KnowledgeBaseRetrievalConfiguration|null,
     *     generationConfiguration?: GenerationConfiguration|null,
     *     orchestrationConfiguration?: OrchestrationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
