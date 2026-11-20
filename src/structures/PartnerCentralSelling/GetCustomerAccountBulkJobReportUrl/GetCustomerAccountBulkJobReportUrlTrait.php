<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccountBulkJobReportUrl;

trait GetCustomerAccountBulkJobReportUrlTrait
{
    /**
     * @param GetCustomerAccountBulkJobReportUrlRequest $args
     * @return GetCustomerAccountBulkJobReportUrlResponse
     */
    public function getCustomerAccountBulkJobReportUrl(GetCustomerAccountBulkJobReportUrlRequest $args)
    {
        $result = parent::getCustomerAccountBulkJobReportUrl($args->toArray());
        return new GetCustomerAccountBulkJobReportUrlResponse($result->toArray());
    }
}
