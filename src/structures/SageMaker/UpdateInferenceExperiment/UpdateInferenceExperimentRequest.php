<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\InferenceExperimentSchedule $Schedule
 * @property string $Description
 * @property list<Shapes\ModelVariantConfig> $ModelVariants
 * @property Shapes\InferenceExperimentDataStorageConfig $DataStorageConfig
 * @property Shapes\ShadowModeConfig $ShadowModeConfig
 */
class UpdateInferenceExperimentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Schedule?: Shapes\InferenceExperimentSchedule,
     *     Description?: string,
     *     ModelVariants?: list<Shapes\ModelVariantConfig>,
     *     DataStorageConfig?: Shapes\InferenceExperimentDataStorageConfig,
     *     ShadowModeConfig?: Shapes\ShadowModeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
