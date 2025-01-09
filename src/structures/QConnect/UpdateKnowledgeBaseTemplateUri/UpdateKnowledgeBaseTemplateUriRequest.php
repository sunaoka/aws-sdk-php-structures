<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $templateUri
 */
class UpdateKnowledgeBaseTemplateUriRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     templateUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
