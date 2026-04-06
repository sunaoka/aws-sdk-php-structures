<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property Shapes\WorkspaceSearchFilter|null $SearchFilter
 * @property Shapes\WorkspaceSearchCriteria|null $SearchCriteria
 */
class SearchWorkspacesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     SearchFilter?: Shapes\WorkspaceSearchFilter|null,
     *     SearchCriteria?: Shapes\WorkspaceSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
