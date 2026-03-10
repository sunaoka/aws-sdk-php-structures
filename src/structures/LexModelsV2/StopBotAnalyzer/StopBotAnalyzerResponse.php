<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StopBotAnalyzer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Processing'|'Available'|'Failed'|'Stopping'|'Stopped'|null $botAnalyzerStatus
 * @property string|null $botAnalyzerRequestId
 */
class StopBotAnalyzerResponse extends Response
{
}
