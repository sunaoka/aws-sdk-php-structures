<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartVoiceToneAnalysisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'en-US' $LanguageCode
 * @property Shapes\KinesisVideoStreamSourceTaskConfiguration|null $KinesisVideoStreamSourceTaskConfiguration
 * @property string|null $ClientRequestToken
 */
class StartVoiceToneAnalysisTaskRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     LanguageCode: 'en-US',
     *     KinesisVideoStreamSourceTaskConfiguration?: Shapes\KinesisVideoStreamSourceTaskConfiguration|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
