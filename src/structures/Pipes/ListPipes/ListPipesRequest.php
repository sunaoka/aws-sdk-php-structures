<?php

namespace Sunaoka\Aws\Structures\Pipes\ListPipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED'|null $CurrentState
 * @property string|null $SourcePrefix
 * @property string|null $TargetPrefix
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListPipesRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     DesiredState?: 'RUNNING'|'STOPPED'|null,
     *     CurrentState?: 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED'|null,
     *     SourcePrefix?: string|null,
     *     TargetPrefix?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
