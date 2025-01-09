<?php

namespace Sunaoka\Aws\Structures\QConnect\ListContentAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentAssociationContents $associationData
 * @property 'AMAZON_CONNECT_GUIDE' $associationType
 * @property string $contentArn
 * @property string $contentAssociationArn
 * @property string $contentAssociationId
 * @property string $contentId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property array<string, string> $tags
 */
class ContentAssociationSummary extends Shape
{
    /**
     * @param array{
     *     associationData: ContentAssociationContents,
     *     associationType: 'AMAZON_CONNECT_GUIDE',
     *     contentArn: string,
     *     contentAssociationArn: string,
     *     contentAssociationId: string,
     *     contentId: string,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
