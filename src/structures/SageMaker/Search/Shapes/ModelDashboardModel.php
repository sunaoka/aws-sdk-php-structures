<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Model|null $Model
 * @property list<ModelDashboardEndpoint>|null $Endpoints
 * @property TransformJob|null $LastBatchTransformJob
 * @property list<ModelDashboardMonitoringSchedule>|null $MonitoringSchedules
 * @property ModelDashboardModelCard|null $ModelCard
 */
class ModelDashboardModel extends Shape
{
    /**
     * @param array{
     *     Model?: Model|null,
     *     Endpoints?: list<ModelDashboardEndpoint>|null,
     *     LastBatchTransformJob?: TransformJob|null,
     *     MonitoringSchedules?: list<ModelDashboardMonitoringSchedule>|null,
     *     ModelCard?: ModelDashboardModelCard|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
