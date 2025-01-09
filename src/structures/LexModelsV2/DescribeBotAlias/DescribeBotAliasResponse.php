<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botAliasId
 * @property string $botAliasName
 * @property string $description
 * @property string $botVersion
 * @property array<string, Shapes\BotAliasLocaleSettings> $botAliasLocaleSettings
 * @property Shapes\ConversationLogSettings $conversationLogSettings
 * @property Shapes\SentimentAnalysisSettings $sentimentAnalysisSettings
 * @property list<Shapes\BotAliasHistoryEvent> $botAliasHistoryEvents
 * @property 'Creating'|'Available'|'Deleting'|'Failed' $botAliasStatus
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property list<Shapes\ParentBotNetwork> $parentBotNetworks
 */
class DescribeBotAliasResponse extends Response
{
}
