<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeKmsKeyId
 * @property bool|null $EnableInterContainerTrafficEncryption
 * @property VpcConfig|null $VpcConfig
 */
class AutoMLSecurityConfig extends Shape
{
    /**
     * @param array{
     *     VolumeKmsKeyId?: string|null,
     *     EnableInterContainerTrafficEncryption?: bool|null,
     *     VpcConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
