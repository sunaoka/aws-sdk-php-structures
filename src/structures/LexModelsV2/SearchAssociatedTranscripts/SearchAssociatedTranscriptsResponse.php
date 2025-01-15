<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\SearchAssociatedTranscripts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property string|null $botRecommendationId
 * @property int<0, 10000000>|null $nextIndex
 * @property list<Shapes\AssociatedTranscript>|null $associatedTranscripts
 * @property int<1, 1000>|null $totalResults
 */
class SearchAssociatedTranscriptsResponse extends Response
{
}
