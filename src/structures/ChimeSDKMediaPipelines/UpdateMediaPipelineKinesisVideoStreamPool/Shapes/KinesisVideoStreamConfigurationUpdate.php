<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaPipelineKinesisVideoStreamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $DataRetentionInHours
 */
class KinesisVideoStreamConfigurationUpdate extends Shape
{
    /**
     * @param array{DataRetentionInHours?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
