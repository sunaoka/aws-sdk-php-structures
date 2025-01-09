<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $SpeakerSearchStatus
 * @property 'Enabled'|'Disabled' $VoiceToneAnalysisStatus
 */
class VoiceAnalyticsProcessorConfiguration extends Shape
{
    /**
     * @param array{
     *     SpeakerSearchStatus?: 'Enabled'|'Disabled',
     *     VoiceToneAnalysisStatus?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
