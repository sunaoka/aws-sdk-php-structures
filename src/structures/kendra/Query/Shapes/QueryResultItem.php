<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER'|null $Type
 * @property 'TABLE'|'TEXT'|null $Format
 * @property list<AdditionalResultAttribute>|null $AdditionalAttributes
 * @property string|null $DocumentId
 * @property TextWithHighlights|null $DocumentTitle
 * @property TextWithHighlights|null $DocumentExcerpt
 * @property string|null $DocumentURI
 * @property list<DocumentAttribute>|null $DocumentAttributes
 * @property ScoreAttributes|null $ScoreAttributes
 * @property string|null $FeedbackToken
 * @property TableExcerpt|null $TableExcerpt
 * @property CollapsedResultDetail|null $CollapsedResultDetail
 */
class QueryResultItem extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER'|null,
     *     Format?: 'TABLE'|'TEXT'|null,
     *     AdditionalAttributes?: list<AdditionalResultAttribute>|null,
     *     DocumentId?: string|null,
     *     DocumentTitle?: TextWithHighlights|null,
     *     DocumentExcerpt?: TextWithHighlights|null,
     *     DocumentURI?: string|null,
     *     DocumentAttributes?: list<DocumentAttribute>|null,
     *     ScoreAttributes?: ScoreAttributes|null,
     *     FeedbackToken?: string|null,
     *     TableExcerpt?: TableExcerpt|null,
     *     CollapsedResultDetail?: CollapsedResultDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
