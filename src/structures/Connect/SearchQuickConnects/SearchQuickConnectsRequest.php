<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQuickConnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\QuickConnectSearchFilter|null $SearchFilter
 * @property Shapes\QuickConnectSearchCriteria|null $SearchCriteria
 */
class SearchQuickConnectsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\QuickConnectSearchFilter|null,
     *     SearchCriteria?: Shapes\QuickConnectSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
