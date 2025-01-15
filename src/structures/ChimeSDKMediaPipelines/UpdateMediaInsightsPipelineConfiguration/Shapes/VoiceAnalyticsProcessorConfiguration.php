<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $SpeakerSearchStatus
 * @property 'Enabled'|'Disabled'|null $VoiceToneAnalysisStatus
 */
class VoiceAnalyticsProcessorConfiguration extends Shape
{
    /**
     * @param array{
     *     SpeakerSearchStatus?: 'Enabled'|'Disabled'|null,
     *     VoiceToneAnalysisStatus?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
