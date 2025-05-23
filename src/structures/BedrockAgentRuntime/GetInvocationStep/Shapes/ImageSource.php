<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetInvocationStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $bytes
 * @property S3Location|null $s3Location
 */
class ImageSource extends Shape
{
    /**
     * @param array{
     *     bytes?: \Psr\Http\Message\StreamInterface|null,
     *     s3Location?: S3Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
