<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $bytes
 * @property S3Location|null $s3Location
 * @property string|null $text
 * @property list<DocumentContentBlock>|null $content
 */
class DocumentSource extends Shape
{
    /**
     * @param array{
     *     bytes?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     s3Location?: S3Location|null,
     *     text?: string|null,
     *     content?: list<DocumentContentBlock>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
