<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeKmsKeyId
 * @property VpcConfig|null $VpcConfig
 */
class LabelingJobResourceConfig extends Shape
{
    /**
     * @param array{
     *     VolumeKmsKeyId?: string|null,
     *     VpcConfig?: VpcConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
