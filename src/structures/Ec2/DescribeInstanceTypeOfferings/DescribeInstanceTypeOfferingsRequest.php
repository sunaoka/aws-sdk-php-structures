<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypeOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 'region'|'availability-zone'|'availability-zone-id'|'outpost'|null $LocationType
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeInstanceTypeOfferingsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     LocationType?: 'region'|'availability-zone'|'availability-zone-id'|'outpost'|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
