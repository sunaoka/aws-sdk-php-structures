<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIELD_PRIORITY' $type
 * @property DataIntegrationFlowFieldPriorityDedupeStrategyConfiguration|null $fieldPriority
 */
class DataIntegrationFlowDedupeStrategy extends Shape
{
    /**
     * @param array{
     *     type: 'FIELD_PRIORITY',
     *     fieldPriority?: DataIntegrationFlowFieldPriorityDedupeStrategyConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
