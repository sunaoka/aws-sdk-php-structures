<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\SearchAssociatedTranscripts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $botRecommendationId
 * @property 'Ascending'|'Descending'|null $searchOrder
 * @property list<Shapes\AssociatedTranscriptFilter> $filters
 * @property int<1, 1000>|null $maxResults
 * @property int<0, 10000000>|null $nextIndex
 */
class SearchAssociatedTranscriptsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     botRecommendationId: string,
     *     searchOrder?: 'Ascending'|'Descending'|null,
     *     filters: list<Shapes\AssociatedTranscriptFilter>,
     *     maxResults?: int<1, 1000>|null,
     *     nextIndex?: int<0, 10000000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
