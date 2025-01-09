<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartSpeakerSearchTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $VoiceProfileDomainArn
 * @property Shapes\KinesisVideoStreamSourceTaskConfiguration $KinesisVideoStreamSourceTaskConfiguration
 * @property string $ClientRequestToken
 */
class StartSpeakerSearchTaskRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     VoiceProfileDomainArn: string,
     *     KinesisVideoStreamSourceTaskConfiguration?: Shapes\KinesisVideoStreamSourceTaskConfiguration,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
