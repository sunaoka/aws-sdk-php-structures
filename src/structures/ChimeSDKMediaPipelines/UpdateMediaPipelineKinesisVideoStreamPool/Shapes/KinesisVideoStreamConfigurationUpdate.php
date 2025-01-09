<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaPipelineKinesisVideoStreamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DataRetentionInHours
 */
class KinesisVideoStreamConfigurationUpdate extends Shape
{
    /**
     * @param array{DataRetentionInHours?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
