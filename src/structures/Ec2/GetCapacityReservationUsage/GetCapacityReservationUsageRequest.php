<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityReservationUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property bool $DryRun
 */
class GetCapacityReservationUsageRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
