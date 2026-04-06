<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseAssociationConfigurationData|null $knowledgeBaseAssociationConfigurationData
 */
class AssociationConfigurationData extends Shape
{
    /**
     * @param array{knowledgeBaseAssociationConfigurationData?: KnowledgeBaseAssociationConfigurationData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
