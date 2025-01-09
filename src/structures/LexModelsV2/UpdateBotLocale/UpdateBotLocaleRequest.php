<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $description
 * @property double $nluIntentConfidenceThreshold
 * @property Shapes\VoiceSettings $voiceSettings
 * @property Shapes\GenerativeAISettings $generativeAISettings
 */
class UpdateBotLocaleRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     description?: string,
     *     nluIntentConfidenceThreshold: double,
     *     voiceSettings?: Shapes\VoiceSettings,
     *     generativeAISettings?: Shapes\GenerativeAISettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
