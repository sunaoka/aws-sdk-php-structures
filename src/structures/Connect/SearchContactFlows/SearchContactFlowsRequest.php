<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\ContactFlowSearchFilter|null $SearchFilter
 * @property Shapes\ContactFlowSearchCriteria|null $SearchCriteria
 */
class SearchContactFlowsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\ContactFlowSearchFilter|null,
     *     SearchCriteria?: Shapes\ContactFlowSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
