<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipelineKinesisVideoStreamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolArn
 * @property string $PoolName
 * @property string $PoolId
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $PoolStatus
 * @property int $PoolSize
 * @property KinesisVideoStreamConfiguration $StreamConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class KinesisVideoStreamPoolConfiguration extends Shape
{
    /**
     * @param array{
     *     PoolArn?: string,
     *     PoolName?: string,
     *     PoolId?: string,
     *     PoolStatus?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     PoolSize?: int,
     *     StreamConfiguration?: KinesisVideoStreamConfiguration,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
