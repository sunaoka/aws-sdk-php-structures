<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationS3Uri
 * @property string|null $KmsKeyId
 * @property bool|null $GenerateInferenceId
 */
class BatchDataCaptureConfig extends Shape
{
    /**
     * @param array{
     *     DestinationS3Uri: string,
     *     KmsKeyId?: string|null,
     *     GenerateInferenceId?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
