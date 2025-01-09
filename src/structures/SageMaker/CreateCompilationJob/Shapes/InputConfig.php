<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCompilationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $DataInputConfig
 * @property 'TENSORFLOW'|'KERAS'|'MXNET'|'ONNX'|'PYTORCH'|'XGBOOST'|'TFLITE'|'DARKNET'|'SKLEARN' $Framework
 * @property string $FrameworkVersion
 */
class InputConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     DataInputConfig?: string,
     *     Framework: 'TENSORFLOW'|'KERAS'|'MXNET'|'ONNX'|'PYTORCH'|'XGBOOST'|'TFLITE'|'DARKNET'|'SKLEARN',
     *     FrameworkVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
