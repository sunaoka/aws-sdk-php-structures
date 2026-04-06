<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $InstanceType
 * @property int|null $InstanceCount
 * @property \Aws\Api\DateTimeResult|null $StartDateRange
 * @property \Aws\Api\DateTimeResult|null $EndDateRange
 * @property int $CapacityDurationHours
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class DescribeCapacityBlockOfferingsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceType?: string|null,
     *     InstanceCount?: int|null,
     *     StartDateRange?: \Aws\Api\DateTimeResult|null,
     *     EndDateRange?: \Aws\Api\DateTimeResult|null,
     *     CapacityDurationHours: int,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
