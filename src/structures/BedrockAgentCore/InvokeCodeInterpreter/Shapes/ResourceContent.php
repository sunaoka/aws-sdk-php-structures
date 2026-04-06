<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'text'|'blob' $type
 * @property string|null $uri
 * @property string|null $mimeType
 * @property string|null $text
 * @property \Psr\Http\Message\StreamInterface|null $blob
 */
class ResourceContent extends Shape
{
    /**
     * @param array{
     *     type: 'text'|'blob',
     *     uri?: string|null,
     *     mimeType?: string|null,
     *     text?: string|null,
     *     blob?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
