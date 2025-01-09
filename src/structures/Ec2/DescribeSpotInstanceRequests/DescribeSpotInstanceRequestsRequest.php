<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 * @property list<string> $SpotInstanceRequestIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeSpotInstanceRequestsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool,
     *     SpotInstanceRequestIds?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
