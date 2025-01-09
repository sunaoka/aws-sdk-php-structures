<?php

namespace Sunaoka\Aws\Structures\Pipes\ListPipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property 'RUNNING'|'STOPPED' $DesiredState
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED' $CurrentState
 * @property string $SourcePrefix
 * @property string $TargetPrefix
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListPipesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     DesiredState?: 'RUNNING'|'STOPPED',
     *     CurrentState?: 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED',
     *     SourcePrefix?: string,
     *     TargetPrefix?: string,
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
