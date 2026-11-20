<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccountStatistics;

trait GetCustomerAccountStatisticsTrait
{
    /**
     * @param GetCustomerAccountStatisticsRequest $args
     * @return GetCustomerAccountStatisticsResponse
     */
    public function getCustomerAccountStatistics(GetCustomerAccountStatisticsRequest $args)
    {
        $result = parent::getCustomerAccountStatistics($args->toArray());
        return new GetCustomerAccountStatisticsResponse($result->toArray());
    }
}
