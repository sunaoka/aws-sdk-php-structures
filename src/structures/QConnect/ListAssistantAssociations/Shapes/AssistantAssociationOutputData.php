<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAssistantAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseAssociationData|null $knowledgeBaseAssociation
 * @property ExternalBedrockKnowledgeBaseConfig|null $externalBedrockKnowledgeBaseConfig
 */
class AssistantAssociationOutputData extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseAssociation?: KnowledgeBaseAssociationData|null,
     *     externalBedrockKnowledgeBaseConfig?: ExternalBedrockKnowledgeBaseConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
