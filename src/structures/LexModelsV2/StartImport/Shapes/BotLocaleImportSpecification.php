<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property double $nluIntentConfidenceThreshold
 * @property VoiceSettings $voiceSettings
 */
class BotLocaleImportSpecification extends Shape
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     nluIntentConfidenceThreshold?: double,
     *     voiceSettings?: VoiceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
