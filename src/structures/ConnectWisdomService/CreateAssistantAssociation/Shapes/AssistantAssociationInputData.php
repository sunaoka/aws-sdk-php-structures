<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateAssistantAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 */
class AssistantAssociationInputData extends Shape
{
    /**
     * @param array{knowledgeBaseId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
