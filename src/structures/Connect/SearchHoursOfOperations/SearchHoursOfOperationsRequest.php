<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\HoursOfOperationSearchFilter|null $SearchFilter
 * @property Shapes\HoursOfOperationSearchCriteria|null $SearchCriteria
 */
class SearchHoursOfOperationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\HoursOfOperationSearchFilter|null,
     *     SearchCriteria?: Shapes\HoursOfOperationSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
