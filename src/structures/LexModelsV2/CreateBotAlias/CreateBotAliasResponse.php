<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botAliasId
 * @property string $botAliasName
 * @property string $description
 * @property string $botVersion
 * @property array<string, Shapes\BotAliasLocaleSettings> $botAliasLocaleSettings
 * @property Shapes\ConversationLogSettings $conversationLogSettings
 * @property Shapes\SentimentAnalysisSettings $sentimentAnalysisSettings
 * @property 'Creating'|'Available'|'Deleting'|'Failed' $botAliasStatus
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property array<string, string> $tags
 */
class CreateBotAliasResponse extends Response
{
}
