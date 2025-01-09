<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeReplicationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DELETING'|'ERROR'|'PAUSED'|'PAUSING' $Status
 * @property string $FileSystemId
 * @property string $Region
 * @property \Aws\Api\DateTimeResult $LastReplicatedTimestamp
 * @property string $OwnerId
 * @property string $StatusMessage
 * @property string $RoleArn
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     Status: 'ENABLED'|'ENABLING'|'DELETING'|'ERROR'|'PAUSED'|'PAUSING',
     *     FileSystemId: string,
     *     Region: string,
     *     LastReplicatedTimestamp?: \Aws\Api\DateTimeResult,
     *     OwnerId?: string,
     *     StatusMessage?: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
