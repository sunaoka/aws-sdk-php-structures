<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelKmsKeyId
 * @property string|null $VolumeKmsKeyId
 * @property string|null $DataLakeKmsKeyId
 * @property VpcConfig|null $VpcConfig
 */
class DataSecurityConfig extends Shape
{
    /**
     * @param array{
     *     ModelKmsKeyId?: string|null,
     *     VolumeKmsKeyId?: string|null,
     *     DataLakeKmsKeyId?: string|null,
     *     VpcConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
