<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botAliasId
 * @property string $botAliasName
 * @property string $description
 * @property string $botVersion
 * @property array<string, Shapes\BotAliasLocaleSettings> $botAliasLocaleSettings
 * @property Shapes\ConversationLogSettings $conversationLogSettings
 * @property Shapes\SentimentAnalysisSettings $sentimentAnalysisSettings
 * @property string $botId
 */
class UpdateBotAliasRequest extends Request
{
    /**
     * @param array{
     *     botAliasId: string,
     *     botAliasName: string,
     *     description?: string,
     *     botVersion?: string,
     *     botAliasLocaleSettings?: array<string, Shapes\BotAliasLocaleSettings>,
     *     conversationLogSettings?: Shapes\ConversationLogSettings,
     *     sentimentAnalysisSettings?: Shapes\SentimentAnalysisSettings,
     *     botId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
