<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssociationConfigurationData|null $associationConfigurationData
 * @property string|null $associationId
 * @property 'KNOWLEDGE_BASE'|null $associationType
 */
class AssociationConfiguration extends Shape
{
    /**
     * @param array{
     *     associationConfigurationData?: AssociationConfigurationData|null,
     *     associationId?: string|null,
     *     associationType?: 'KNOWLEDGE_BASE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
