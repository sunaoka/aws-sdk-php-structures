<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string|null $description
 * @property double $nluIntentConfidenceThreshold
 * @property Shapes\VoiceSettings|null $voiceSettings
 * @property Shapes\GenerativeAISettings|null $generativeAISettings
 * @property 'Default'|'HighNoiseTolerance'|'MaximumNoiseTolerance'|null $speechDetectionSensitivity
 */
class CreateBotLocaleRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     description?: string|null,
     *     nluIntentConfidenceThreshold: double,
     *     voiceSettings?: Shapes\VoiceSettings|null,
     *     generativeAISettings?: Shapes\GenerativeAISettings|null,
     *     speechDetectionSensitivity?: 'Default'|'HighNoiseTolerance'|'MaximumNoiseTolerance'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
