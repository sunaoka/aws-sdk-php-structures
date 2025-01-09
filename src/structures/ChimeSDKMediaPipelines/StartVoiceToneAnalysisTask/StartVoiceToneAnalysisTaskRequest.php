<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartVoiceToneAnalysisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'en-US' $LanguageCode
 * @property Shapes\KinesisVideoStreamSourceTaskConfiguration $KinesisVideoStreamSourceTaskConfiguration
 * @property string $ClientRequestToken
 */
class StartVoiceToneAnalysisTaskRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     LanguageCode: 'en-US',
     *     KinesisVideoStreamSourceTaskConfiguration?: Shapes\KinesisVideoStreamSourceTaskConfiguration,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
