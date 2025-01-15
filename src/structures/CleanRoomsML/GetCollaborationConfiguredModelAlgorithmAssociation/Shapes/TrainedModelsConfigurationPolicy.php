<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogsConfigurationPolicy>|null $containerLogs
 * @property MetricsConfigurationPolicy|null $containerMetrics
 */
class TrainedModelsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     containerLogs?: list<LogsConfigurationPolicy>|null,
     *     containerMetrics?: MetricsConfigurationPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
