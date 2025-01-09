<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAssistantAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseAssociationData $knowledgeBaseAssociation
 */
class AssistantAssociationOutputData extends Shape
{
    /**
     * @param array{knowledgeBaseAssociation?: KnowledgeBaseAssociationData} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
