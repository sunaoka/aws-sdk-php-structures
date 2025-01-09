<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformBranches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SearchFilter> $Filters
 * @property int<1, max> $MaxRecords
 * @property string $NextToken
 */
class ListPlatformBranchesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\SearchFilter>,
     *     MaxRecords?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
