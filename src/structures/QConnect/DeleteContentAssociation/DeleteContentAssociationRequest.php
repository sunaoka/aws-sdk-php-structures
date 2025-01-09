<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteContentAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentAssociationId
 * @property string $contentId
 * @property string $knowledgeBaseId
 */
class DeleteContentAssociationRequest extends Request
{
    /**
     * @param array{
     *     contentAssociationId: string,
     *     contentId: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
