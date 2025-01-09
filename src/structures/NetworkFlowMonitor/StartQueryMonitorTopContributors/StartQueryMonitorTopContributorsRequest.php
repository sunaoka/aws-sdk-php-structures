<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StartQueryMonitorTopContributors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'ROUND_TRIP_TIME'|'TIMEOUTS'|'RETRANSMISSIONS'|'DATA_TRANSFERRED' $metricName
 * @property 'INTRA_AZ'|'INTER_AZ'|'INTER_VPC'|'UNCLASSIFIED'|'AMAZON_S3'|'AMAZON_DYNAMODB' $destinationCategory
 * @property int $limit
 */
class StartQueryMonitorTopContributorsRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     metricName: 'ROUND_TRIP_TIME'|'TIMEOUTS'|'RETRANSMISSIONS'|'DATA_TRANSFERRED',
     *     destinationCategory: 'INTRA_AZ'|'INTER_AZ'|'INTER_VPC'|'UNCLASSIFIED'|'AMAZON_S3'|'AMAZON_DYNAMODB',
     *     limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
