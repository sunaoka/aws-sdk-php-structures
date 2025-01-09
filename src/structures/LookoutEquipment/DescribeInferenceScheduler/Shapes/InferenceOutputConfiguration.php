<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeInferenceScheduler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceS3OutputConfiguration $S3OutputConfiguration
 * @property string $KmsKeyId
 */
class InferenceOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     S3OutputConfiguration: InferenceS3OutputConfiguration,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
