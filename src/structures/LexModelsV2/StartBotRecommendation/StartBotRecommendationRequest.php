<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\TranscriptSourceSetting $transcriptSourceSetting
 * @property Shapes\EncryptionSetting $encryptionSetting
 */
class StartBotRecommendationRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     transcriptSourceSetting: Shapes\TranscriptSourceSetting,
     *     encryptionSetting?: Shapes\EncryptionSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
