<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property Shapes\WorkspaceAssociationSearchFilter|null $SearchFilter
 * @property Shapes\WorkspaceAssociationSearchCriteria|null $SearchCriteria
 */
class SearchWorkspaceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     SearchFilter?: Shapes\WorkspaceAssociationSearchFilter|null,
     *     SearchCriteria?: Shapes\WorkspaceAssociationSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
