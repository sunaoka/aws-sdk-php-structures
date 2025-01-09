<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\ContactFlowSearchFilter $SearchFilter
 * @property Shapes\ContactFlowSearchCriteria $SearchCriteria
 */
class SearchContactFlowsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SearchFilter?: Shapes\ContactFlowSearchFilter,
     *     SearchCriteria?: Shapes\ContactFlowSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
