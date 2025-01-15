<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\InferenceExperimentSchedule|null $Schedule
 * @property string|null $Description
 * @property list<Shapes\ModelVariantConfig>|null $ModelVariants
 * @property Shapes\InferenceExperimentDataStorageConfig|null $DataStorageConfig
 * @property Shapes\ShadowModeConfig|null $ShadowModeConfig
 */
class UpdateInferenceExperimentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Schedule?: Shapes\InferenceExperimentSchedule|null,
     *     Description?: string|null,
     *     ModelVariants?: list<Shapes\ModelVariantConfig>|null,
     *     DataStorageConfig?: Shapes\InferenceExperimentDataStorageConfig|null,
     *     ShadowModeConfig?: Shapes\ShadowModeConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
