<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementFromOpportunityTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string>|null $EngagementIdentifier
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $OpportunityIdentifier
 * @property Shapes\ListTasksSortBase|null $Sort
 * @property list<string>|null $TaskIdentifier
 * @property list<'IN_PROGRESS'|'COMPLETE'|'FAILED'>|null $TaskStatus
 */
class ListEngagementFromOpportunityTasksRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier?: list<string>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     OpportunityIdentifier?: list<string>|null,
     *     Sort?: Shapes\ListTasksSortBase|null,
     *     TaskIdentifier?: list<string>|null,
     *     TaskStatus?: list<'IN_PROGRESS'|'COMPLETE'|'FAILED'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
