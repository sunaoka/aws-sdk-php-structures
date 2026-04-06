<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistantAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $knowledgeBaseArn
 * @property string|null $knowledgeBaseId
 */
class KnowledgeBaseAssociationData extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseArn?: string|null,
     *     knowledgeBaseId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
