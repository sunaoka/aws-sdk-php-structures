<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalyMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitorArn
 * @property string $MonitorName
 * @property string $CreationDate
 * @property string $LastUpdatedDate
 * @property string $LastEvaluatedDate
 * @property 'DIMENSIONAL'|'CUSTOM' $MonitorType
 * @property 'SERVICE' $MonitorDimension
 * @property Expression $MonitorSpecification
 * @property int $DimensionalValueCount
 */
class AnomalyMonitor extends Shape
{
    /**
     * @param array{
     *     MonitorArn?: string,
     *     MonitorName: string,
     *     CreationDate?: string,
     *     LastUpdatedDate?: string,
     *     LastEvaluatedDate?: string,
     *     MonitorType: 'DIMENSIONAL'|'CUSTOM',
     *     MonitorDimension?: 'SERVICE',
     *     MonitorSpecification?: Expression,
     *     DimensionalValueCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
