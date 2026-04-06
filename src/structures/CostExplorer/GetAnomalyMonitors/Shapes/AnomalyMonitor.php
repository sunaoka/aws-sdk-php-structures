<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalyMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MonitorArn
 * @property string $MonitorName
 * @property string|null $CreationDate
 * @property string|null $LastUpdatedDate
 * @property string|null $LastEvaluatedDate
 * @property 'DIMENSIONAL'|'CUSTOM' $MonitorType
 * @property 'SERVICE'|'LINKED_ACCOUNT'|'TAG'|'COST_CATEGORY'|null $MonitorDimension
 * @property Expression|null $MonitorSpecification
 * @property int<0, max>|null $DimensionalValueCount
 */
class AnomalyMonitor extends Shape
{
    /**
     * @param array{
     *     MonitorArn?: string|null,
     *     MonitorName: string,
     *     CreationDate?: string|null,
     *     LastUpdatedDate?: string|null,
     *     LastEvaluatedDate?: string|null,
     *     MonitorType: 'DIMENSIONAL'|'CUSTOM',
     *     MonitorDimension?: 'SERVICE'|'LINKED_ACCOUNT'|'TAG'|'COST_CATEGORY'|null,
     *     MonitorSpecification?: Expression|null,
     *     DimensionalValueCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
