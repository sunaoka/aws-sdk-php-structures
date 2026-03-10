<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotAnalyzer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property 'Processing'|'Available'|'Failed'|'Stopping'|'Stopped'|null $botAnalyzerStatus
 * @property string|null $botAnalyzerRequestId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 */
class StartBotAnalyzerResponse extends Response
{
}
