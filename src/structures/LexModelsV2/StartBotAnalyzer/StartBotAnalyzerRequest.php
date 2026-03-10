<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property 'BotLocale' $analysisScope
 * @property string|null $localeId
 * @property string|null $botVersion
 */
class StartBotAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     analysisScope: 'BotLocale',
     *     localeId?: string|null,
     *     botVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
