<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectTargetedSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Score
 * @property float|null $GroupScore
 * @property string|null $Text
 * @property 'PERSON'|'LOCATION'|'ORGANIZATION'|'FACILITY'|'BRAND'|'COMMERCIAL_ITEM'|'MOVIE'|'MUSIC'|'BOOK'|'SOFTWARE'|'GAME'|'PERSONAL_TITLE'|'EVENT'|'DATE'|'QUANTITY'|'ATTRIBUTE'|'OTHER'|null $Type
 * @property MentionSentiment|null $MentionSentiment
 * @property int|null $BeginOffset
 * @property int|null $EndOffset
 */
class TargetedSentimentMention extends Shape
{
    /**
     * @param array{
     *     Score?: float|null,
     *     GroupScore?: float|null,
     *     Text?: string|null,
     *     Type?: 'PERSON'|'LOCATION'|'ORGANIZATION'|'FACILITY'|'BRAND'|'COMMERCIAL_ITEM'|'MOVIE'|'MUSIC'|'BOOK'|'SOFTWARE'|'GAME'|'PERSONAL_TITLE'|'EVENT'|'DATE'|'QUANTITY'|'ATTRIBUTE'|'OTHER'|null,
     *     MentionSentiment?: MentionSentiment|null,
     *     BeginOffset?: int|null,
     *     EndOffset?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
