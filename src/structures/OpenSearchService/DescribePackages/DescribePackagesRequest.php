<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribePackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DescribePackagesFilter> $Filters
 * @property int<min, 100> $MaxResults
 * @property string $NextToken
 */
class DescribePackagesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\DescribePackagesFilter>,
     *     MaxResults?: int<min, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
