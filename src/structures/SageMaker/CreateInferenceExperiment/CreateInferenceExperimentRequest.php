<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'ShadowMode' $Type
 * @property Shapes\InferenceExperimentSchedule $Schedule
 * @property string $Description
 * @property string $RoleArn
 * @property string $EndpointName
 * @property list<Shapes\ModelVariantConfig> $ModelVariants
 * @property Shapes\InferenceExperimentDataStorageConfig $DataStorageConfig
 * @property Shapes\ShadowModeConfig $ShadowModeConfig
 * @property string $KmsKey
 * @property list<Shapes\Tag> $Tags
 */
class CreateInferenceExperimentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'ShadowMode',
     *     Schedule?: Shapes\InferenceExperimentSchedule,
     *     Description?: string,
     *     RoleArn: string,
     *     EndpointName: string,
     *     ModelVariants: list<Shapes\ModelVariantConfig>,
     *     DataStorageConfig?: Shapes\InferenceExperimentDataStorageConfig,
     *     ShadowModeConfig: Shapes\ShadowModeConfig,
     *     KmsKey?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
