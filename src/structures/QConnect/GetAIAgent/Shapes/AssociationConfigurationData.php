<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnowledgeBaseAssociationConfigurationData $knowledgeBaseAssociationConfigurationData
 */
class AssociationConfigurationData extends Shape
{
    /**
     * @param array{knowledgeBaseAssociationConfigurationData?: KnowledgeBaseAssociationConfigurationData} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
