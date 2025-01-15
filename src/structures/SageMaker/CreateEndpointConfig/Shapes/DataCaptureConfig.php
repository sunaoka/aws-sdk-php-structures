<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableCapture
 * @property int<0, 100> $InitialSamplingPercentage
 * @property string $DestinationS3Uri
 * @property string|null $KmsKeyId
 * @property list<CaptureOption> $CaptureOptions
 * @property CaptureContentTypeHeader|null $CaptureContentTypeHeader
 */
class DataCaptureConfig extends Shape
{
    /**
     * @param array{
     *     EnableCapture?: bool|null,
     *     InitialSamplingPercentage: int<0, 100>,
     *     DestinationS3Uri: string,
     *     KmsKeyId?: string|null,
     *     CaptureOptions: list<CaptureOption>,
     *     CaptureContentTypeHeader?: CaptureContentTypeHeader|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
