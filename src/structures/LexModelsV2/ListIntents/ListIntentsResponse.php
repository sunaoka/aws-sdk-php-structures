<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property list<Shapes\IntentSummary> $intentSummaries
 * @property string $nextToken
 */
class ListIntentsResponse extends Response
{
}
