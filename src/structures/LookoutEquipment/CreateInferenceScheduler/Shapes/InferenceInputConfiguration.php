<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceS3InputConfiguration|null $S3InputConfiguration
 * @property string|null $InputTimeZoneOffset
 * @property InferenceInputNameConfiguration|null $InferenceInputNameConfiguration
 */
class InferenceInputConfiguration extends Shape
{
    /**
     * @param array{
     *     S3InputConfiguration?: InferenceS3InputConfiguration|null,
     *     InputTimeZoneOffset?: string|null,
     *     InferenceInputNameConfiguration?: InferenceInputNameConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
