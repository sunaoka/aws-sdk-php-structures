<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEND'|'COMPLAINT'|'PERMANENT_BOUNCE'|'TRANSIENT_BOUNCE'|'OPEN'|'CLICK'|'DELIVERY'|'DELIVERY_OPEN'|'DELIVERY_CLICK'|'DELIVERY_COMPLAINT' $Name
 * @property 'RATE'|'VOLUME' $Aggregation
 */
class ExportMetric extends Shape
{
    /**
     * @param array{
     *     Name?: 'SEND'|'COMPLAINT'|'PERMANENT_BOUNCE'|'TRANSIENT_BOUNCE'|'OPEN'|'CLICK'|'DELIVERY'|'DELIVERY_OPEN'|'DELIVERY_CLICK'|'DELIVERY_COMPLAINT',
     *     Aggregation?: 'RATE'|'VOLUME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
