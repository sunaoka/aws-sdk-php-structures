<?php

namespace Sunaoka\Aws\Structures\Pipes\ListPipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED'|null $CurrentState
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $Source
 * @property string|null $Target
 * @property string|null $Enrichment
 */
class Pipe extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     DesiredState?: 'RUNNING'|'STOPPED'|null,
     *     CurrentState?: 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED'|null,
     *     StateReason?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Source?: string|null,
     *     Target?: string|null,
     *     Enrichment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
