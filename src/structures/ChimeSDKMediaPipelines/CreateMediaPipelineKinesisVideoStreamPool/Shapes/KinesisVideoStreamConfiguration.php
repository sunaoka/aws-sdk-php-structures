<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaPipelineKinesisVideoStreamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property int<0, max>|null $DataRetentionInHours
 */
class KinesisVideoStreamConfiguration extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     DataRetentionInHours?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
