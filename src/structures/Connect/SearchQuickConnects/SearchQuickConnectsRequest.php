<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQuickConnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\QuickConnectSearchFilter $SearchFilter
 * @property Shapes\QuickConnectSearchCriteria $SearchCriteria
 */
class SearchQuickConnectsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SearchFilter?: Shapes\QuickConnectSearchFilter,
     *     SearchCriteria?: Shapes\QuickConnectSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
