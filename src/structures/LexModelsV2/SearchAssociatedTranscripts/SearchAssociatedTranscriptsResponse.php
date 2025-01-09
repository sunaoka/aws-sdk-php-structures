<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\SearchAssociatedTranscripts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $botRecommendationId
 * @property int<0, 10000000> $nextIndex
 * @property list<Shapes\AssociatedTranscript> $associatedTranscripts
 * @property int<1, 1000> $totalResults
 */
class SearchAssociatedTranscriptsResponse extends Response
{
}
