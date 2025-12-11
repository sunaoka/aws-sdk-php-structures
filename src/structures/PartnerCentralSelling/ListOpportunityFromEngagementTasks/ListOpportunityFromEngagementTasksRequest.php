<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunityFromEngagementTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ListTasksSortBase|null $Sort
 * @property string $Catalog
 * @property list<'IN_PROGRESS'|'COMPLETE'|'FAILED'>|null $TaskStatus
 * @property list<string>|null $TaskIdentifier
 * @property list<string>|null $OpportunityIdentifier
 * @property list<string>|null $EngagementIdentifier
 * @property list<string>|null $ContextIdentifier
 */
class ListOpportunityFromEngagementTasksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\ListTasksSortBase|null,
     *     Catalog: string,
     *     TaskStatus?: list<'IN_PROGRESS'|'COMPLETE'|'FAILED'>|null,
     *     TaskIdentifier?: list<string>|null,
     *     OpportunityIdentifier?: list<string>|null,
     *     EngagementIdentifier?: list<string>|null,
     *     ContextIdentifier?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
