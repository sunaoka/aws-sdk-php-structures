<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribePackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DescribePackagesFilter>|null $Filters
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribePackagesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\DescribePackagesFilter>|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
