<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogsConfigurationPolicy> $containerLogs
 * @property TrainedModelInferenceMaxOutputSize $maxOutputSize
 */
class TrainedModelInferenceJobsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     containerLogs?: list<LogsConfigurationPolicy>,
     *     maxOutputSize?: TrainedModelInferenceMaxOutputSize
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
