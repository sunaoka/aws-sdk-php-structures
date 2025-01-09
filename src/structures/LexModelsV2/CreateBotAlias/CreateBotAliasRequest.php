<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botAliasName
 * @property string $description
 * @property string $botVersion
 * @property array<string, Shapes\BotAliasLocaleSettings> $botAliasLocaleSettings
 * @property Shapes\ConversationLogSettings $conversationLogSettings
 * @property Shapes\SentimentAnalysisSettings $sentimentAnalysisSettings
 * @property string $botId
 * @property array<string, string> $tags
 */
class CreateBotAliasRequest extends Request
{
    /**
     * @param array{
     *     botAliasName: string,
     *     description?: string,
     *     botVersion?: string,
     *     botAliasLocaleSettings?: array<string, Shapes\BotAliasLocaleSettings>,
     *     conversationLogSettings?: Shapes\ConversationLogSettings,
     *     sentimentAnalysisSettings?: Shapes\SentimentAnalysisSettings,
     *     botId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
