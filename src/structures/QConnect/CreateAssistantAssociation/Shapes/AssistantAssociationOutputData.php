<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistantAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseAssociationData|null $knowledgeBaseAssociation
 */
class AssistantAssociationOutputData extends Shape
{
    /**
     * @param array{knowledgeBaseAssociation?: KnowledgeBaseAssociationData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
