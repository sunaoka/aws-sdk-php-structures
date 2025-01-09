<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER' $Type
 * @property list<AdditionalResultAttribute> $AdditionalAttributes
 * @property string $DocumentId
 * @property TextWithHighlights $DocumentTitle
 * @property TextWithHighlights $DocumentExcerpt
 * @property string $DocumentURI
 * @property list<DocumentAttribute> $DocumentAttributes
 * @property string $FeedbackToken
 */
class FeaturedResultsItem extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER',
     *     AdditionalAttributes?: list<AdditionalResultAttribute>,
     *     DocumentId?: string,
     *     DocumentTitle?: TextWithHighlights,
     *     DocumentExcerpt?: TextWithHighlights,
     *     DocumentURI?: string,
     *     DocumentAttributes?: list<DocumentAttribute>,
     *     FeedbackToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
