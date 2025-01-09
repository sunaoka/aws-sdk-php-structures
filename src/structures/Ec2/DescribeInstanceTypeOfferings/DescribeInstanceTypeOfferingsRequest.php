<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypeOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property 'region'|'availability-zone'|'availability-zone-id'|'outpost' $LocationType
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeInstanceTypeOfferingsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     LocationType?: 'region'|'availability-zone'|'availability-zone-id'|'outpost',
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
