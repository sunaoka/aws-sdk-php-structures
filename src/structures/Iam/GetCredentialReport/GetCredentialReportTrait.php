<?php

namespace Sunaoka\Aws\Structures\Iam\GetCredentialReport;

trait GetCredentialReportTrait
{
    /**
     * @return GetCredentialReportResponse
     */
    public function getCredentialReport()
    {
        $result = parent::getCredentialReport();
        return new GetCredentialReportResponse($result->toArray());
    }
}
