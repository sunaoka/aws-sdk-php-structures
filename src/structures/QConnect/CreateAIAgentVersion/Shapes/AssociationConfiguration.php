<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $associationId
 * @property 'KNOWLEDGE_BASE'|null $associationType
 * @property AssociationConfigurationData|null $associationConfigurationData
 */
class AssociationConfiguration extends Shape
{
    /**
     * @param array{
     *     associationId?: string|null,
     *     associationType?: 'KNOWLEDGE_BASE'|null,
     *     associationConfigurationData?: AssociationConfigurationData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
