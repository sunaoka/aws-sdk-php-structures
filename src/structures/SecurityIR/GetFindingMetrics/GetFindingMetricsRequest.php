<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetFindingMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipId
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 */
class GetFindingMetricsRequest extends Request
{
    /**
     * @param array{
     *     membershipId: string,
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
