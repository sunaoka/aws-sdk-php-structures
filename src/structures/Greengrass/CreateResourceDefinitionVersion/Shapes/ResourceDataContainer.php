<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalDeviceResourceData $LocalDeviceResourceData
 * @property LocalVolumeResourceData $LocalVolumeResourceData
 * @property S3MachineLearningModelResourceData $S3MachineLearningModelResourceData
 * @property SageMakerMachineLearningModelResourceData $SageMakerMachineLearningModelResourceData
 * @property SecretsManagerSecretResourceData $SecretsManagerSecretResourceData
 */
class ResourceDataContainer extends Shape
{
    /**
     * @param array{
     *     LocalDeviceResourceData?: LocalDeviceResourceData,
     *     LocalVolumeResourceData?: LocalVolumeResourceData,
     *     S3MachineLearningModelResourceData?: S3MachineLearningModelResourceData,
     *     SageMakerMachineLearningModelResourceData?: SageMakerMachineLearningModelResourceData,
     *     SecretsManagerSecretResourceData?: SecretsManagerSecretResourceData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
