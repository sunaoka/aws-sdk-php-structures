<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAnalyzerHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $localeId
 * @property string|null $botVersion
 * @property list<Shapes\BotAnalyzerHistorySummary>|null $botAnalyzerHistoryList
 * @property string|null $nextToken
 */
class ListBotAnalyzerHistoryResponse extends Response
{
}
