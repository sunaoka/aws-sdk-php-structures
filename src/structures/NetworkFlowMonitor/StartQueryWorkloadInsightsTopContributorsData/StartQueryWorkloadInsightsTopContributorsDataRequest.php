<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StartQueryWorkloadInsightsTopContributorsData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'TIMEOUTS'|'RETRANSMISSIONS'|'DATA_TRANSFERRED' $metricName
 * @property 'INTRA_AZ'|'INTER_AZ'|'INTER_VPC'|'UNCLASSIFIED'|'AMAZON_S3'|'AMAZON_DYNAMODB'|'INTER_REGION' $destinationCategory
 */
class StartQueryWorkloadInsightsTopContributorsDataRequest extends Request
{
    /**
     * @param array{
     *     scopeId: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     metricName: 'TIMEOUTS'|'RETRANSMISSIONS'|'DATA_TRANSFERRED',
     *     destinationCategory: 'INTRA_AZ'|'INTER_AZ'|'INTER_VPC'|'UNCLASSIFIED'|'AMAZON_S3'|'AMAZON_DYNAMODB'|'INTER_REGION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
