<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botAliasId
 * @property string $botAliasName
 * @property string|null $description
 * @property string|null $botVersion
 * @property array<string, Shapes\BotAliasLocaleSettings>|null $botAliasLocaleSettings
 * @property Shapes\ConversationLogSettings|null $conversationLogSettings
 * @property Shapes\SentimentAnalysisSettings|null $sentimentAnalysisSettings
 * @property string $botId
 */
class UpdateBotAliasRequest extends Request
{
    /**
     * @param array{
     *     botAliasId: string,
     *     botAliasName: string,
     *     description?: string|null,
     *     botVersion?: string|null,
     *     botAliasLocaleSettings?: array<string, Shapes\BotAliasLocaleSettings>|null,
     *     conversationLogSettings?: Shapes\ConversationLogSettings|null,
     *     sentimentAnalysisSettings?: Shapes\SentimentAnalysisSettings|null,
     *     botId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
