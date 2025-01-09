<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeKmsKeyId
 * @property VpcConfig $VpcConfig
 */
class LabelingJobResourceConfig extends Shape
{
    /**
     * @param array{
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: VpcConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
