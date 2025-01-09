<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaPipelineKinesisVideoStreamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property int $DataRetentionInHours
 */
class KinesisVideoStreamConfiguration extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     DataRetentionInHours?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
