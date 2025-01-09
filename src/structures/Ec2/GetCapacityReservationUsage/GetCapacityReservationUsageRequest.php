<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityReservationUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationId
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 */
class GetCapacityReservationUsageRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
