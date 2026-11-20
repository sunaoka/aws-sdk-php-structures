<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunityBulkJobReportUrl;

trait GetOpportunityBulkJobReportUrlTrait
{
    /**
     * @param GetOpportunityBulkJobReportUrlRequest $args
     * @return GetOpportunityBulkJobReportUrlResponse
     */
    public function getOpportunityBulkJobReportUrl(GetOpportunityBulkJobReportUrlRequest $args)
    {
        $result = parent::getOpportunityBulkJobReportUrl($args->toArray());
        return new GetOpportunityBulkJobReportUrlResponse($result->toArray());
    }
}
