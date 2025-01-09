<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDeviceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputLocation
 * @property string $KmsKeyId
 * @property 'GreengrassV2Component' $PresetDeploymentType
 * @property string $PresetDeploymentConfig
 */
class EdgeOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputLocation: string,
     *     KmsKeyId?: string,
     *     PresetDeploymentType?: 'GreengrassV2Component',
     *     PresetDeploymentConfig?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
