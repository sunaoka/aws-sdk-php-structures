<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeKmsKeyId
 * @property bool $EnableInterContainerTrafficEncryption
 * @property VpcConfig $VpcConfig
 */
class AutoMLSecurityConfig extends Shape
{
    /**
     * @param array{
     *     VolumeKmsKeyId?: string,
     *     EnableInterContainerTrafficEncryption?: bool,
     *     VpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
