<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistantAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $knowledgeBaseId
 * @property string|null $knowledgeBaseArn
 */
class KnowledgeBaseAssociationData extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId?: string|null,
     *     knowledgeBaseArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
