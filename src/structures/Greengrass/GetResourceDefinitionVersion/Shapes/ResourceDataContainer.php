<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalDeviceResourceData|null $LocalDeviceResourceData
 * @property LocalVolumeResourceData|null $LocalVolumeResourceData
 * @property S3MachineLearningModelResourceData|null $S3MachineLearningModelResourceData
 * @property SageMakerMachineLearningModelResourceData|null $SageMakerMachineLearningModelResourceData
 * @property SecretsManagerSecretResourceData|null $SecretsManagerSecretResourceData
 */
class ResourceDataContainer extends Shape
{
    /**
     * @param array{
     *     LocalDeviceResourceData?: LocalDeviceResourceData|null,
     *     LocalVolumeResourceData?: LocalVolumeResourceData|null,
     *     S3MachineLearningModelResourceData?: S3MachineLearningModelResourceData|null,
     *     SageMakerMachineLearningModelResourceData?: SageMakerMachineLearningModelResourceData|null,
     *     SecretsManagerSecretResourceData?: SecretsManagerSecretResourceData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
