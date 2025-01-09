<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property 'CustomPayload'|'ImageResponseCard'|'PlainText'|'SSML' $contentType
 * @property ImageResponseCard $imageResponseCard
 */
class Message extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     contentType: 'CustomPayload'|'ImageResponseCard'|'PlainText'|'SSML',
     *     imageResponseCard?: ImageResponseCard
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
