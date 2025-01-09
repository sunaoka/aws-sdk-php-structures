<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectTargetedSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Score
 * @property float $GroupScore
 * @property string $Text
 * @property 'PERSON'|'LOCATION'|'ORGANIZATION'|'FACILITY'|'BRAND'|'COMMERCIAL_ITEM'|'MOVIE'|'MUSIC'|'BOOK'|'SOFTWARE'|'GAME'|'PERSONAL_TITLE'|'EVENT'|'DATE'|'QUANTITY'|'ATTRIBUTE'|'OTHER' $Type
 * @property MentionSentiment $MentionSentiment
 * @property int $BeginOffset
 * @property int $EndOffset
 */
class TargetedSentimentMention extends Shape
{
    /**
     * @param array{
     *     Score?: float,
     *     GroupScore?: float,
     *     Text?: string,
     *     Type?: 'PERSON'|'LOCATION'|'ORGANIZATION'|'FACILITY'|'BRAND'|'COMMERCIAL_ITEM'|'MOVIE'|'MUSIC'|'BOOK'|'SOFTWARE'|'GAME'|'PERSONAL_TITLE'|'EVENT'|'DATE'|'QUANTITY'|'ATTRIBUTE'|'OTHER',
     *     MentionSentiment?: MentionSentiment,
     *     BeginOffset?: int,
     *     EndOffset?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
