<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelKmsKeyId
 * @property string $VolumeKmsKeyId
 * @property VpcConfig $VpcConfig
 */
class UpdateDataSecurityConfig extends Shape
{
    /**
     * @param array{
     *     ModelKmsKeyId?: string,
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
