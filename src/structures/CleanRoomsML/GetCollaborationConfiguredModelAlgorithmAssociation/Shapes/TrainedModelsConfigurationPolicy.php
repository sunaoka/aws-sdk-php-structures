<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogsConfigurationPolicy> $containerLogs
 * @property MetricsConfigurationPolicy $containerMetrics
 */
class TrainedModelsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     containerLogs?: list<LogsConfigurationPolicy>,
     *     containerMetrics?: MetricsConfigurationPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
