<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\PutSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property 'CustomPayload'|'ImageResponseCard'|'PlainText'|'SSML' $contentType
 * @property ImageResponseCard|null $imageResponseCard
 */
class Message extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     contentType: 'CustomPayload'|'ImageResponseCard'|'PlainText'|'SSML',
     *     imageResponseCard?: ImageResponseCard|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
