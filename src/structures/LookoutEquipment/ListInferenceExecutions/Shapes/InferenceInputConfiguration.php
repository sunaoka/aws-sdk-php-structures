<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceS3InputConfiguration $S3InputConfiguration
 * @property string $InputTimeZoneOffset
 * @property InferenceInputNameConfiguration $InferenceInputNameConfiguration
 */
class InferenceInputConfiguration extends Shape
{
    /**
     * @param array{
     *     S3InputConfiguration?: InferenceS3InputConfiguration,
     *     InputTimeZoneOffset?: string,
     *     InferenceInputNameConfiguration?: InferenceInputNameConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
