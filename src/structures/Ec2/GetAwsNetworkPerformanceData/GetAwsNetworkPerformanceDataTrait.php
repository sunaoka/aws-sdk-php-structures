<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAwsNetworkPerformanceData;

trait GetAwsNetworkPerformanceDataTrait
{
    /**
     * @param GetAwsNetworkPerformanceDataRequest $args
     * @return GetAwsNetworkPerformanceDataResponse
     */
    public function getAwsNetworkPerformanceData(GetAwsNetworkPerformanceDataRequest $args)
    {
        $result = parent::getAwsNetworkPerformanceData($args->toArray());
        return new GetAwsNetworkPerformanceDataResponse($result->toArray());
    }
}
