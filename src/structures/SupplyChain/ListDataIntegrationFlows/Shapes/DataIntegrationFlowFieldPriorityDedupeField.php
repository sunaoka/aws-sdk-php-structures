<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'ASC'|'DESC' $sortOrder
 */
class DataIntegrationFlowFieldPriorityDedupeField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     sortOrder: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
