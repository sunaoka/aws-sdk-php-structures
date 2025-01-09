<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property int $CapacityBlockExtensionDurationHours
 * @property string $CapacityReservationId
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeCapacityBlockExtensionOfferingsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     CapacityBlockExtensionDurationHours: int,
     *     CapacityReservationId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
