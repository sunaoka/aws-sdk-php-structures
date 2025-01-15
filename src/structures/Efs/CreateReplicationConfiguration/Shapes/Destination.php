<?php

namespace Sunaoka\Aws\Structures\Efs\CreateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DELETING'|'ERROR'|'PAUSED'|'PAUSING' $Status
 * @property string $FileSystemId
 * @property string $Region
 * @property \Aws\Api\DateTimeResult|null $LastReplicatedTimestamp
 * @property string|null $OwnerId
 * @property string|null $StatusMessage
 * @property string|null $RoleArn
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     Status: 'ENABLED'|'ENABLING'|'DELETING'|'ERROR'|'PAUSED'|'PAUSING',
     *     FileSystemId: string,
     *     Region: string,
     *     LastReplicatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     OwnerId?: string|null,
     *     StatusMessage?: string|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
