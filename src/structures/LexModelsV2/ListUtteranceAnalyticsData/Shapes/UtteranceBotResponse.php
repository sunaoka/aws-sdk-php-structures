<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property 'PlainText'|'CustomPayload'|'SSML'|'ImageResponseCard'|null $contentType
 * @property ImageResponseCard|null $imageResponseCard
 */
class UtteranceBotResponse extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     contentType?: 'PlainText'|'CustomPayload'|'SSML'|'ImageResponseCard'|null,
     *     imageResponseCard?: ImageResponseCard|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
