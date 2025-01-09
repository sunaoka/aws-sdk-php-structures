<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperationOverrides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\HoursOfOperationSearchFilter $SearchFilter
 * @property Shapes\HoursOfOperationOverrideSearchCriteria $SearchCriteria
 */
class SearchHoursOfOperationOverridesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SearchFilter?: Shapes\HoursOfOperationSearchFilter,
     *     SearchCriteria?: Shapes\HoursOfOperationOverrideSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
