<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableCapture
 * @property int<0, 100> $InitialSamplingPercentage
 * @property string $DestinationS3Uri
 * @property string $KmsKeyId
 * @property list<CaptureOption> $CaptureOptions
 * @property CaptureContentTypeHeader $CaptureContentTypeHeader
 */
class DataCaptureConfig extends Shape
{
    /**
     * @param array{
     *     EnableCapture?: bool,
     *     InitialSamplingPercentage: int<0, 100>,
     *     DestinationS3Uri: string,
     *     KmsKeyId?: string,
     *     CaptureOptions: list<CaptureOption>,
     *     CaptureContentTypeHeader?: CaptureContentTypeHeader
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
