<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogsConfigurationPolicy>|null $containerLogs
 * @property TrainedModelInferenceMaxOutputSize|null $maxOutputSize
 */
class TrainedModelInferenceJobsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     containerLogs?: list<LogsConfigurationPolicy>|null,
     *     maxOutputSize?: TrainedModelInferenceMaxOutputSize|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
