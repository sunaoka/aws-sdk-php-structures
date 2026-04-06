<?php

namespace Sunaoka\Aws\Structures\Pipes\ListPipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|null $CurrentState
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property string|null $Enrichment
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $Name
 * @property string|null $Source
 * @property string|null $StateReason
 * @property string|null $Target
 */
class Pipe extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CurrentState?: 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|null,
     *     DesiredState?: 'RUNNING'|'STOPPED'|null,
     *     Enrichment?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Source?: string|null,
     *     StateReason?: string|null,
     *     Target?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
