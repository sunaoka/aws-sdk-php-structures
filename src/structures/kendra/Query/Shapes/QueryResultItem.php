<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER' $Type
 * @property 'TABLE'|'TEXT' $Format
 * @property list<AdditionalResultAttribute> $AdditionalAttributes
 * @property string $DocumentId
 * @property TextWithHighlights $DocumentTitle
 * @property TextWithHighlights $DocumentExcerpt
 * @property string $DocumentURI
 * @property list<DocumentAttribute> $DocumentAttributes
 * @property ScoreAttributes $ScoreAttributes
 * @property string $FeedbackToken
 * @property TableExcerpt $TableExcerpt
 * @property CollapsedResultDetail $CollapsedResultDetail
 */
class QueryResultItem extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER',
     *     Format?: 'TABLE'|'TEXT',
     *     AdditionalAttributes?: list<AdditionalResultAttribute>,
     *     DocumentId?: string,
     *     DocumentTitle?: TextWithHighlights,
     *     DocumentExcerpt?: TextWithHighlights,
     *     DocumentURI?: string,
     *     DocumentAttributes?: list<DocumentAttribute>,
     *     ScoreAttributes?: ScoreAttributes,
     *     FeedbackToken?: string,
     *     TableExcerpt?: TableExcerpt,
     *     CollapsedResultDetail?: CollapsedResultDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
