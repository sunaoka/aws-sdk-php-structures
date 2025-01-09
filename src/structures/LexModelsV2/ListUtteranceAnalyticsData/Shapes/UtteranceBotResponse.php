<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceAnalyticsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property 'PlainText'|'CustomPayload'|'SSML'|'ImageResponseCard' $contentType
 * @property ImageResponseCard $imageResponseCard
 */
class UtteranceBotResponse extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     contentType?: 'PlainText'|'CustomPayload'|'SSML'|'ImageResponseCard',
     *     imageResponseCard?: ImageResponseCard
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
