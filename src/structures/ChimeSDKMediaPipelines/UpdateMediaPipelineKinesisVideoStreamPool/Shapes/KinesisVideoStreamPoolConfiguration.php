<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaPipelineKinesisVideoStreamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PoolArn
 * @property string|null $PoolName
 * @property string|null $PoolId
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null $PoolStatus
 * @property int<0, max>|null $PoolSize
 * @property KinesisVideoStreamConfiguration|null $StreamConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class KinesisVideoStreamPoolConfiguration extends Shape
{
    /**
     * @param array{
     *     PoolArn?: string|null,
     *     PoolName?: string|null,
     *     PoolId?: string|null,
     *     PoolStatus?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|null,
     *     PoolSize?: int<0, max>|null,
     *     StreamConfiguration?: KinesisVideoStreamConfiguration|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
