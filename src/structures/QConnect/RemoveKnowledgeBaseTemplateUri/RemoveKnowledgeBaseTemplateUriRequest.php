<?php

namespace Sunaoka\Aws\Structures\QConnect\RemoveKnowledgeBaseTemplateUri;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 */
class RemoveKnowledgeBaseTemplateUriRequest extends Request
{
    /**
     * @param array{knowledgeBaseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
