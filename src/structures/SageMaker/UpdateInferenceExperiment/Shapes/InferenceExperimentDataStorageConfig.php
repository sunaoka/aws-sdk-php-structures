<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 * @property string|null $KmsKey
 * @property CaptureContentTypeHeader|null $ContentType
 */
class InferenceExperimentDataStorageConfig extends Shape
{
    /**
     * @param array{
     *     Destination: string,
     *     KmsKey?: string|null,
     *     ContentType?: CaptureContentTypeHeader|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
