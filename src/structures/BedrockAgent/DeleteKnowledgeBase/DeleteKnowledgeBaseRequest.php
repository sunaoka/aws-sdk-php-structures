<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 */
class DeleteKnowledgeBaseRequest extends Request
{
    /**
     * @param array{knowledgeBaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
