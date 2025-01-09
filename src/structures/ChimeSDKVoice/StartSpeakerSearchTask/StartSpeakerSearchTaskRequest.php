<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartSpeakerSearchTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $TransactionId
 * @property string $VoiceProfileDomainId
 * @property string $ClientRequestToken
 * @property 'Caller'|'Callee' $CallLeg
 */
class StartSpeakerSearchTaskRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     TransactionId: string,
     *     VoiceProfileDomainId: string,
     *     ClientRequestToken?: string,
     *     CallLeg?: 'Caller'|'Callee'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
