<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssociationConfigurationData $associationConfigurationData
 * @property string $associationId
 * @property 'KNOWLEDGE_BASE' $associationType
 */
class AssociationConfiguration extends Shape
{
    /**
     * @param array{
     *     associationConfigurationData?: AssociationConfigurationData,
     *     associationId?: string,
     *     associationType?: 'KNOWLEDGE_BASE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
