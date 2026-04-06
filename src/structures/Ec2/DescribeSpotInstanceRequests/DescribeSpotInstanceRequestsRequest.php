<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property list<string>|null $SpotInstanceRequestIds
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class DescribeSpotInstanceRequestsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     SpotInstanceRequestIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
