<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int|null $MaxResults
 * @property bool|null $DryRun
 * @property list<string>|null $SpotInstanceRequestIds
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeSpotInstanceRequestsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int|null,
     *     DryRun?: bool|null,
     *     SpotInstanceRequestIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
