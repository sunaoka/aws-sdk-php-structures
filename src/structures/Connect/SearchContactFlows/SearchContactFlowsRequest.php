<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\ContactFlowSearchFilter $SearchFilter
 * @property Shapes\ContactFlowSearchCriteria $SearchCriteria
 */
class SearchContactFlowsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SearchFilter?: Shapes\ContactFlowSearchFilter,
     *     SearchCriteria?: Shapes\ContactFlowSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
