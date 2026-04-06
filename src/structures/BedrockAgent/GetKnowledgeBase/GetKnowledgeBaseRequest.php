<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 */
class GetKnowledgeBaseRequest extends Request
{
    /**
     * @param array{knowledgeBaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
