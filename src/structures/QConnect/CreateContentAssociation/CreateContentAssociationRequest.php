<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContentAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ContentAssociationContents $association
 * @property 'AMAZON_CONNECT_GUIDE' $associationType
 * @property string $clientToken
 * @property string $contentId
 * @property string $knowledgeBaseId
 * @property array<string, string> $tags
 */
class CreateContentAssociationRequest extends Request
{
    /**
     * @param array{
     *     association: Shapes\ContentAssociationContents,
     *     associationType: 'AMAZON_CONNECT_GUIDE',
     *     clientToken?: string,
     *     contentId: string,
     *     knowledgeBaseId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
