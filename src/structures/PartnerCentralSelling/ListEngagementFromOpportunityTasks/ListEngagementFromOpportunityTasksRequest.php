<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementFromOpportunityTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string> $EngagementIdentifier
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<string> $OpportunityIdentifier
 * @property Shapes\ListTasksSortBase $Sort
 * @property list<string> $TaskIdentifier
 * @property list<'IN_PROGRESS'|'COMPLETE'|'FAILED'> $TaskStatus
 */
class ListEngagementFromOpportunityTasksRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     OpportunityIdentifier?: list<string>,
     *     Sort?: Shapes\ListTasksSortBase,
     *     TaskIdentifier?: list<string>,
     *     TaskStatus?: list<'IN_PROGRESS'|'COMPLETE'|'FAILED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
