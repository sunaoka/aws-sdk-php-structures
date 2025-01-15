<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartSpeakerSearchTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $TransactionId
 * @property string $VoiceProfileDomainId
 * @property string|null $ClientRequestToken
 * @property 'Caller'|'Callee'|null $CallLeg
 */
class StartSpeakerSearchTaskRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     TransactionId: string,
     *     VoiceProfileDomainId: string,
     *     ClientRequestToken?: string|null,
     *     CallLeg?: 'Caller'|'Callee'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
