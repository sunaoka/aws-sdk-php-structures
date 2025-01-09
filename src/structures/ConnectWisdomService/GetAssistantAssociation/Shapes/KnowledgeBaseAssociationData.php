<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetAssistantAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 */
class KnowledgeBaseAssociationData extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseArn?: string,
     *     knowledgeBaseId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
