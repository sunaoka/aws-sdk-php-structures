<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 * @property string $KmsKey
 * @property CaptureContentTypeHeader $ContentType
 */
class InferenceExperimentDataStorageConfig extends Shape
{
    /**
     * @param array{
     *     Destination: string,
     *     KmsKey?: string,
     *     ContentType?: CaptureContentTypeHeader
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
