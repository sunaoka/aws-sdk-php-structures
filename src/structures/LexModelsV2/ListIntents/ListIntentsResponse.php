<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property list<Shapes\IntentSummary>|null $intentSummaries
 * @property string|null $nextToken
 */
class ListIntentsResponse extends Response
{
}
