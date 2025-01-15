<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityReservationUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $DryRun
 */
class GetCapacityReservationUsageRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
