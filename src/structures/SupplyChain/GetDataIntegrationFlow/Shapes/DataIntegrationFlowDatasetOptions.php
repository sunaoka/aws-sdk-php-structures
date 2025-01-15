<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCREMENTAL'|'REPLACE'|null $loadType
 * @property bool|null $dedupeRecords
 */
class DataIntegrationFlowDatasetOptions extends Shape
{
    /**
     * @param array{
     *     loadType?: 'INCREMENTAL'|'REPLACE'|null,
     *     dedupeRecords?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
