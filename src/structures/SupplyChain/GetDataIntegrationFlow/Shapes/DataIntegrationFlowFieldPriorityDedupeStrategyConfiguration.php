<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataIntegrationFlowFieldPriorityDedupeField> $fields
 */
class DataIntegrationFlowFieldPriorityDedupeStrategyConfiguration extends Shape
{
    /**
     * @param array{fields: list<DataIntegrationFlowFieldPriorityDedupeField>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
