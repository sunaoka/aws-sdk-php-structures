<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdNamespaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVIDER'|'RULE_BASED' $idMappingType
 */
class IdNamespaceIdMappingWorkflowMetadata extends Shape
{
    /**
     * @param array{idMappingType: 'PROVIDER'|'RULE_BASED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
