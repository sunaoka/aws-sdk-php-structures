<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int $CapacityBlockExtensionDurationHours
 * @property string $CapacityReservationId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class DescribeCapacityBlockExtensionOfferingsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     CapacityBlockExtensionDurationHours: int,
     *     CapacityReservationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
