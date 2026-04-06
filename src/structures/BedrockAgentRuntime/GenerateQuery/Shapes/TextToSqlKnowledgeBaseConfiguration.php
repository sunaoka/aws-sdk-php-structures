<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseArn
 */
class TextToSqlKnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{knowledgeBaseArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
