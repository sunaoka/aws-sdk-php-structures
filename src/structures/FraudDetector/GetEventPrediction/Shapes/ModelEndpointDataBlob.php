<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $byteBuffer
 * @property string $contentType
 */
class ModelEndpointDataBlob extends Shape
{
    /**
     * @param array{
     *     byteBuffer?: string|resource|\Psr\Http\Message\StreamInterface,
     *     contentType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
