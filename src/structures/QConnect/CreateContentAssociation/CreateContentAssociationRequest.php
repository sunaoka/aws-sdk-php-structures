<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContentAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ContentAssociationContents $association
 * @property 'AMAZON_CONNECT_GUIDE' $associationType
 * @property string|null $clientToken
 * @property string $contentId
 * @property string $knowledgeBaseId
 * @property array<string, string>|null $tags
 */
class CreateContentAssociationRequest extends Request
{
    /**
     * @param array{
     *     association: Shapes\ContentAssociationContents,
     *     associationType: 'AMAZON_CONNECT_GUIDE',
     *     clientToken?: string|null,
     *     contentId: string,
     *     knowledgeBaseId: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
