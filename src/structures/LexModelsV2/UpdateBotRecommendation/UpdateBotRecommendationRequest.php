<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $botRecommendationId
 * @property Shapes\EncryptionSetting $encryptionSetting
 */
class UpdateBotRecommendationRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     botRecommendationId: string,
     *     encryptionSetting: Shapes\EncryptionSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
