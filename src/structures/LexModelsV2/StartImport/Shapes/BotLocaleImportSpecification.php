<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property double|null $nluIntentConfidenceThreshold
 * @property VoiceSettings|null $voiceSettings
 */
class BotLocaleImportSpecification extends Shape
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     nluIntentConfidenceThreshold?: double|null,
     *     voiceSettings?: VoiceSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
