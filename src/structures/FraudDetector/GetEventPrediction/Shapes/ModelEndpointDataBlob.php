<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $byteBuffer
 * @property string $contentType
 */
class ModelEndpointDataBlob extends Shape
{
    /**
     * @param array{
     *     byteBuffer?: string,
     *     contentType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
