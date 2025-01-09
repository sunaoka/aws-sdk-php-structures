<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property Shapes\HoursOfOperationSearchFilter $SearchFilter
 * @property Shapes\HoursOfOperationSearchCriteria $SearchCriteria
 */
class SearchHoursOfOperationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SearchFilter?: Shapes\HoursOfOperationSearchFilter,
     *     SearchCriteria?: Shapes\HoursOfOperationSearchCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
