<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformBranches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SearchFilter>|null $Filters
 * @property int<1, max>|null $MaxRecords
 * @property string|null $NextToken
 */
class ListPlatformBranchesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\SearchFilter>|null,
     *     MaxRecords?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
