<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string|null $modelId
 */
class KnowledgeBaseFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     modelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
