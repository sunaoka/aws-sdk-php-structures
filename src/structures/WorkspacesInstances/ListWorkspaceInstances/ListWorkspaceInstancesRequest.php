<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListWorkspaceInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'ALLOCATING'|'ALLOCATED'|'DEALLOCATING'|'DEALLOCATED'|'ERROR_ALLOCATING'|'ERROR_DEALLOCATING'>|null $ProvisionStates
 * @property int<1, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class ListWorkspaceInstancesRequest extends Request
{
    /**
     * @param array{
     *     ProvisionStates?: list<'ALLOCATING'|'ALLOCATED'|'DEALLOCATING'|'DEALLOCATED'|'ERROR_ALLOCATING'|'ERROR_DEALLOCATING'>|null,
     *     MaxResults?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
