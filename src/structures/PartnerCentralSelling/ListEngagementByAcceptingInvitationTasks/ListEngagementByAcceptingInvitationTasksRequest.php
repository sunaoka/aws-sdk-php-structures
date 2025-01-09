<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementByAcceptingInvitationTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string> $EngagementInvitationIdentifier
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<string> $OpportunityIdentifier
 * @property Shapes\ListTasksSortBase $Sort
 * @property list<string> $TaskIdentifier
 * @property list<'IN_PROGRESS'|'COMPLETE'|'FAILED'> $TaskStatus
 */
class ListEngagementByAcceptingInvitationTasksRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementInvitationIdentifier?: list<string>,
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
