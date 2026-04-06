<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SQL'|'NONE' $transformationType
 * @property DataIntegrationFlowSQLTransformationConfiguration|null $sqlTransformation
 */
class DataIntegrationFlowTransformation extends Shape
{
    /**
     * @param array{
     *     transformationType: 'SQL'|'NONE',
     *     sqlTransformation?: DataIntegrationFlowSQLTransformationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
