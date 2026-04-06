<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'text'|'image'|'resource'|'resource_link' $type
 * @property string|null $text
 * @property \Psr\Http\Message\StreamInterface|null $data
 * @property string|null $mimeType
 * @property string|null $uri
 * @property string|null $name
 * @property string|null $description
 * @property int|null $size
 * @property ResourceContent|null $resource
 */
class ContentBlock extends Shape
{
    /**
     * @param array{
     *     type: 'text'|'image'|'resource'|'resource_link',
     *     text?: string|null,
     *     data?: \Psr\Http\Message\StreamInterface|null,
     *     mimeType?: string|null,
     *     uri?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     size?: int|null,
     *     resource?: ResourceContent|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
