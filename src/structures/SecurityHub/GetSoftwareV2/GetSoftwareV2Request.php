<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SoftwareFilters|null $Filters
 * @property Shapes\SoftwareScopes|null $Scopes
 * @property list<Shapes\SortCriterion>|null $SortCriteria
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetSoftwareV2Request extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\SoftwareFilters|null,
     *     Scopes?: Shapes\SoftwareScopes|null,
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
