<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $bytes
 * @property S3Location $s3Location
 */
class VideoSource extends Shape
{
    /**
     * @param array{
     *     bytes?: string|resource|\Psr\Http\Message\StreamInterface,
     *     s3Location?: S3Location
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
