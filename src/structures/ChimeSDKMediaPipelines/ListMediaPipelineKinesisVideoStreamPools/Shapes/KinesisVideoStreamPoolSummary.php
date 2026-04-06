<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaPipelineKinesisVideoStreamPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PoolName
 * @property string|null $PoolId
 * @property string|null $PoolArn
 */
class KinesisVideoStreamPoolSummary extends Shape
{
    /**
     * @param array{
     *     PoolName?: string|null,
     *     PoolId?: string|null,
     *     PoolArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
