<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OcsfFindingFilters|null $Filters
 * @property list<Shapes\SortCriterion>|null $SortCriteria
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetFindingsV2Request extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\OcsfFindingFilters|null,
     *     SortCriteria?: list<Shapes\SortCriterion>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
