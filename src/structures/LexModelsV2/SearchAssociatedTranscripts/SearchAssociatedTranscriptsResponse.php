<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\SearchAssociatedTranscripts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $botRecommendationId
 * @property int $nextIndex
 * @property list<Shapes\AssociatedTranscript> $associatedTranscripts
 * @property int $totalResults
 */
class SearchAssociatedTranscriptsResponse extends Response
{
}
