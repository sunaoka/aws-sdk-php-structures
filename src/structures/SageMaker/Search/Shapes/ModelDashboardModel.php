<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Model $Model
 * @property list<ModelDashboardEndpoint> $Endpoints
 * @property TransformJob $LastBatchTransformJob
 * @property list<ModelDashboardMonitoringSchedule> $MonitoringSchedules
 * @property ModelDashboardModelCard $ModelCard
 */
class ModelDashboardModel extends Shape
{
    /**
     * @param array{
     *     Model?: Model,
     *     Endpoints?: list<ModelDashboardEndpoint>,
     *     LastBatchTransformJob?: TransformJob,
     *     MonitoringSchedules?: list<ModelDashboardMonitoringSchedule>,
     *     ModelCard?: ModelDashboardModelCard
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
