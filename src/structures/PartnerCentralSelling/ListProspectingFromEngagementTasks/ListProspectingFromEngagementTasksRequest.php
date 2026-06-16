<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListProspectingFromEngagementTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $TaskIdentifier
 * @property list<string>|null $TaskName
 * @property \Aws\Api\DateTimeResult|null $StartAfter
 * @property \Aws\Api\DateTimeResult|null $StartBefore
 * @property Shapes\ProspectingFromEngagementTaskSort|null $Sort
 */
class ListProspectingFromEngagementTasksRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     TaskIdentifier?: list<string>|null,
     *     TaskName?: list<string>|null,
     *     StartAfter?: \Aws\Api\DateTimeResult|null,
     *     StartBefore?: \Aws\Api\DateTimeResult|null,
     *     Sort?: Shapes\ProspectingFromEngagementTaskSort|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
