<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\SearchAssociatedTranscripts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $botRecommendationId
 * @property 'Ascending'|'Descending' $searchOrder
 * @property list<Shapes\AssociatedTranscriptFilter> $filters
 * @property int $maxResults
 * @property int $nextIndex
 */
class SearchAssociatedTranscriptsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     botRecommendationId: string,
     *     searchOrder?: 'Ascending'|'Descending',
     *     filters: list<Shapes\AssociatedTranscriptFilter>,
     *     maxResults?: int,
     *     nextIndex?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
