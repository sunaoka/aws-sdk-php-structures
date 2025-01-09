<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SQL'|'NONE' $transformationType
 * @property DataIntegrationFlowSQLTransformationConfiguration $sqlTransformation
 */
class DataIntegrationFlowTransformation extends Shape
{
    /**
     * @param array{
     *     transformationType: 'SQL'|'NONE',
     *     sqlTransformation?: DataIntegrationFlowSQLTransformationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
