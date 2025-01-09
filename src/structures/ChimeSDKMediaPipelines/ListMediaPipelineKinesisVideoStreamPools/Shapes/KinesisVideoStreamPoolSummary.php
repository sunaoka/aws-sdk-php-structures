<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaPipelineKinesisVideoStreamPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolName
 * @property string $PoolId
 * @property string $PoolArn
 */
class KinesisVideoStreamPoolSummary extends Shape
{
    /**
     * @param array{
     *     PoolName?: string,
     *     PoolId?: string,
     *     PoolArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
