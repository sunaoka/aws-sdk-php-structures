<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContentAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $knowledgeBaseArn
 * @property string $contentId
 * @property string $contentArn
 * @property string $contentAssociationId
 * @property string $contentAssociationArn
 * @property 'AMAZON_CONNECT_GUIDE' $associationType
 * @property ContentAssociationContents $associationData
 * @property array<string, string>|null $tags
 */
class ContentAssociationData extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     knowledgeBaseArn: string,
     *     contentId: string,
     *     contentArn: string,
     *     contentAssociationId: string,
     *     contentAssociationArn: string,
     *     associationType: 'AMAZON_CONNECT_GUIDE',
     *     associationData: ContentAssociationContents,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
