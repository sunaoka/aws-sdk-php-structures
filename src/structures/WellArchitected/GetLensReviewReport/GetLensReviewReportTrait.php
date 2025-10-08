<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReviewReport;

trait GetLensReviewReportTrait
{
    /**
     * @param GetLensReviewReportRequest $args
     * @return GetLensReviewReportResponse
     */
    public function getLensReviewReport(GetLensReviewReportRequest $args)
    {
        $result = parent::getLensReviewReport($args->toArray());
        return new GetLensReviewReportResponse($result->toArray());
    }
}
