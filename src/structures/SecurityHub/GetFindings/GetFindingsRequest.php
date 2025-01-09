<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsSecurityFindingFilters $Filters
 * @property list<Shapes\SortCriterion> $SortCriteria
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetFindingsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\AwsSecurityFindingFilters,
     *     SortCriteria?: list<Shapes\SortCriterion>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
