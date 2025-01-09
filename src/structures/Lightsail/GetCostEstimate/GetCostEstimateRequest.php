<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCostEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class GetCostEstimateRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
