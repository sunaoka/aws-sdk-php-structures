<?php

namespace Sunaoka\Aws\Structures\Connect\SearchDataTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property Shapes\DataTableSearchFilter|null $SearchFilter
 * @property Shapes\DataTableSearchCriteria|null $SearchCriteria
 */
class SearchDataTablesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     SearchFilter?: Shapes\DataTableSearchFilter|null,
     *     SearchCriteria?: Shapes\DataTableSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
