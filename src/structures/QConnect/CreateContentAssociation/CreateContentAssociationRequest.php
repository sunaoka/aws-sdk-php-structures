<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContentAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $knowledgeBaseId
 * @property string $contentId
 * @property 'AMAZON_CONNECT_GUIDE' $associationType
 * @property Shapes\ContentAssociationContents $association
 * @property array<string, string>|null $tags
 */
class CreateContentAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     knowledgeBaseId: string,
     *     contentId: string,
     *     associationType: 'AMAZON_CONNECT_GUIDE',
     *     association: Shapes\ContentAssociationContents,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
