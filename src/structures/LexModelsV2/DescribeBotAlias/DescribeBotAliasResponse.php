<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botAliasId
 * @property string|null $botAliasName
 * @property string|null $description
 * @property string|null $botVersion
 * @property array<string, Shapes\BotAliasLocaleSettings>|null $botAliasLocaleSettings
 * @property Shapes\ConversationLogSettings|null $conversationLogSettings
 * @property Shapes\SentimentAnalysisSettings|null $sentimentAnalysisSettings
 * @property list<Shapes\BotAliasHistoryEvent>|null $botAliasHistoryEvents
 * @property 'Creating'|'Available'|'Deleting'|'Failed'|null $botAliasStatus
 * @property string|null $botId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property list<Shapes\ParentBotNetwork>|null $parentBotNetworks
 */
class DescribeBotAliasResponse extends Response
{
}
