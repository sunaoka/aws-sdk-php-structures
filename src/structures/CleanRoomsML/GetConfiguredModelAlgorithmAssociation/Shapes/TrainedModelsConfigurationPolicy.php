<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogsConfigurationPolicy>|null $containerLogs
 * @property MetricsConfigurationPolicy|null $containerMetrics
 * @property TrainedModelArtifactMaxSize|null $maxArtifactSize
 */
class TrainedModelsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     containerLogs?: list<LogsConfigurationPolicy>|null,
     *     containerMetrics?: MetricsConfigurationPolicy|null,
     *     maxArtifactSize?: TrainedModelArtifactMaxSize|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
