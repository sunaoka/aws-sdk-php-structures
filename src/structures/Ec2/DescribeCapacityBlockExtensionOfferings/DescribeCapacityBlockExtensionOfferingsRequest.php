<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property int $CapacityBlockExtensionDurationHours
 * @property string $CapacityReservationId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class DescribeCapacityBlockExtensionOfferingsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     CapacityBlockExtensionDurationHours: int,
     *     CapacityReservationId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
