<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Destination
 * @property 'Wav'|'Opus'|null $RecordingFileFormat
 */
class S3RecordingSinkConfiguration extends Shape
{
    /**
     * @param array{
     *     Destination?: string|null,
     *     RecordingFileFormat?: 'Wav'|'Opus'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
