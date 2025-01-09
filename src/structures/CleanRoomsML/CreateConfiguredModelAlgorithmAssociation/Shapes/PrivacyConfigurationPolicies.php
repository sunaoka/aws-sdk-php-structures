<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainedModelsConfigurationPolicy $trainedModels
 * @property TrainedModelExportsConfigurationPolicy $trainedModelExports
 * @property TrainedModelInferenceJobsConfigurationPolicy $trainedModelInferenceJobs
 */
class PrivacyConfigurationPolicies extends Shape
{
    /**
     * @param array{
     *     trainedModels?: TrainedModelsConfigurationPolicy,
     *     trainedModelExports?: TrainedModelExportsConfigurationPolicy,
     *     trainedModelInferenceJobs?: TrainedModelInferenceJobsConfigurationPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
