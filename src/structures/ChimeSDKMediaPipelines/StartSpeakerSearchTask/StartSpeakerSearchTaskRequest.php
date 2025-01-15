<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartSpeakerSearchTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $VoiceProfileDomainArn
 * @property Shapes\KinesisVideoStreamSourceTaskConfiguration|null $KinesisVideoStreamSourceTaskConfiguration
 * @property string|null $ClientRequestToken
 */
class StartSpeakerSearchTaskRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     VoiceProfileDomainArn: string,
     *     KinesisVideoStreamSourceTaskConfiguration?: Shapes\KinesisVideoStreamSourceTaskConfiguration|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
