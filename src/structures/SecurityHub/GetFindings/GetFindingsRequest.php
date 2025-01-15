<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsSecurityFindingFilters|null $Filters
 * @property list<Shapes\SortCriterion>|null $SortCriteria
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetFindingsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\AwsSecurityFindingFilters|null,
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
