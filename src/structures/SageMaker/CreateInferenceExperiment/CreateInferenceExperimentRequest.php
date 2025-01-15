<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'ShadowMode' $Type
 * @property Shapes\InferenceExperimentSchedule|null $Schedule
 * @property string|null $Description
 * @property string $RoleArn
 * @property string $EndpointName
 * @property list<Shapes\ModelVariantConfig> $ModelVariants
 * @property Shapes\InferenceExperimentDataStorageConfig|null $DataStorageConfig
 * @property Shapes\ShadowModeConfig $ShadowModeConfig
 * @property string|null $KmsKey
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInferenceExperimentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'ShadowMode',
     *     Schedule?: Shapes\InferenceExperimentSchedule|null,
     *     Description?: string|null,
     *     RoleArn: string,
     *     EndpointName: string,
     *     ModelVariants: list<Shapes\ModelVariantConfig>,
     *     DataStorageConfig?: Shapes\InferenceExperimentDataStorageConfig|null,
     *     ShadowModeConfig: Shapes\ShadowModeConfig,
     *     KmsKey?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
