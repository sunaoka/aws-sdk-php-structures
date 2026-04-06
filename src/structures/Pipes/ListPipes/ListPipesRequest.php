<?php

namespace Sunaoka\Aws\Structures\Pipes\ListPipes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|null $CurrentState
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property int<1, 100>|null $Limit
 * @property string|null $NamePrefix
 * @property string|null $NextToken
 * @property string|null $SourcePrefix
 * @property string|null $TargetPrefix
 */
class ListPipesRequest extends Request
{
    /**
     * @param array{
     *     CurrentState?: 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|null,
     *     DesiredState?: 'RUNNING'|'STOPPED'|null,
     *     Limit?: int<1, 100>|null,
     *     NamePrefix?: string|null,
     *     NextToken?: string|null,
     *     SourcePrefix?: string|null,
     *     TargetPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
