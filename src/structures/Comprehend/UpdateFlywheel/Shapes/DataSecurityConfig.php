<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelKmsKeyId
 * @property string $VolumeKmsKeyId
 * @property string $DataLakeKmsKeyId
 * @property VpcConfig $VpcConfig
 */
class DataSecurityConfig extends Shape
{
    /**
     * @param array{
     *     ModelKmsKeyId?: string,
     *     VolumeKmsKeyId?: string,
     *     DataLakeKmsKeyId?: string,
     *     VpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
