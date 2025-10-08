<?php

namespace Sunaoka\Aws\Structures\Iam\GenerateCredentialReport;

trait GenerateCredentialReportTrait
{
    /**
     * @return GenerateCredentialReportResponse
     */
    public function generateCredentialReport()
    {
        $result = parent::generateCredentialReport();
        return new GenerateCredentialReportResponse($result->toArray());
    }
}
