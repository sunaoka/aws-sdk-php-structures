<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $byteBuffer
 * @property string|null $contentType
 */
class ModelEndpointDataBlob extends Shape
{
    /**
     * @param array{
     *     byteBuffer?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     contentType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
