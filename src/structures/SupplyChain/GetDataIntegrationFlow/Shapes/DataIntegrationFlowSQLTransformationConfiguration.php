<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $query
 */
class DataIntegrationFlowSQLTransformationConfiguration extends Shape
{
    /**
     * @param array{query: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
