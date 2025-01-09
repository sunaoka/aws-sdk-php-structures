<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InstanceType
 * @property int $InstanceCount
 * @property \Aws\Api\DateTimeResult $StartDateRange
 * @property \Aws\Api\DateTimeResult $EndDateRange
 * @property int $CapacityDurationHours
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class DescribeCapacityBlockOfferingsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceType?: string,
     *     InstanceCount?: int,
     *     StartDateRange?: \Aws\Api\DateTimeResult,
     *     EndDateRange?: \Aws\Api\DateTimeResult,
     *     CapacityDurationHours: int,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
