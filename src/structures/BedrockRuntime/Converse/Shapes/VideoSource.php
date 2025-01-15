<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $bytes
 * @property S3Location|null $s3Location
 */
class VideoSource extends Shape
{
    /**
     * @param array{
     *     bytes?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     s3Location?: S3Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
