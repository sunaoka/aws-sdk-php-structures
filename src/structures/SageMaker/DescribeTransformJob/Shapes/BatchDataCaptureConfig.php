<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationS3Uri
 * @property string $KmsKeyId
 * @property bool $GenerateInferenceId
 */
class BatchDataCaptureConfig extends Shape
{
    /**
     * @param array{
     *     DestinationS3Uri: string,
     *     KmsKeyId?: string,
     *     GenerateInferenceId?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
