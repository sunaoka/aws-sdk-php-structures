<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartVoiceToneAnalysisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $TransactionId
 * @property 'en-US' $LanguageCode
 * @property string|null $ClientRequestToken
 */
class StartVoiceToneAnalysisTaskRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     TransactionId: string,
     *     LanguageCode: 'en-US',
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
