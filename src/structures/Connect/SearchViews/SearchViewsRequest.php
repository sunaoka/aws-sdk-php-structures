<?php

namespace Sunaoka\Aws\Structures\Connect\SearchViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\ViewSearchFilter|null $SearchFilter
 * @property Shapes\ViewSearchCriteria|null $SearchCriteria
 */
class SearchViewsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\ViewSearchFilter|null,
     *     SearchCriteria?: Shapes\ViewSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
