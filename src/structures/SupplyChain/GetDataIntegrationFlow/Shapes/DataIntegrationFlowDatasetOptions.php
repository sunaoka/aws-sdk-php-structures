<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCREMENTAL'|'REPLACE' $loadType
 * @property bool $dedupeRecords
 */
class DataIntegrationFlowDatasetOptions extends Shape
{
    /**
     * @param array{
     *     loadType?: 'INCREMENTAL'|'REPLACE',
     *     dedupeRecords?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
