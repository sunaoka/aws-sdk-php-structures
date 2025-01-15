<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDeviceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputLocation
 * @property string|null $KmsKeyId
 * @property 'GreengrassV2Component'|null $PresetDeploymentType
 * @property string|null $PresetDeploymentConfig
 */
class EdgeOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputLocation: string,
     *     KmsKeyId?: string|null,
     *     PresetDeploymentType?: 'GreengrassV2Component'|null,
     *     PresetDeploymentConfig?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
