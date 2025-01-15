<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainedModelsConfigurationPolicy|null $trainedModels
 * @property TrainedModelExportsConfigurationPolicy|null $trainedModelExports
 * @property TrainedModelInferenceJobsConfigurationPolicy|null $trainedModelInferenceJobs
 */
class PrivacyConfigurationPolicies extends Shape
{
    /**
     * @param array{
     *     trainedModels?: TrainedModelsConfigurationPolicy|null,
     *     trainedModelExports?: TrainedModelExportsConfigurationPolicy|null,
     *     trainedModelInferenceJobs?: TrainedModelInferenceJobsConfigurationPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
