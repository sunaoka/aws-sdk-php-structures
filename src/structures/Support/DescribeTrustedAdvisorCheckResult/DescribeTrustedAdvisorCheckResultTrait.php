<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult;

trait DescribeTrustedAdvisorCheckResultTrait
{
    /**
     * @param DescribeTrustedAdvisorCheckResultRequest $args
     * @return DescribeTrustedAdvisorCheckResultResponse
     */
    public function describeTrustedAdvisorCheckResult(DescribeTrustedAdvisorCheckResultRequest $args)
    {
        $result = parent::describeTrustedAdvisorCheckResult($args->toArray());
        return new DescribeTrustedAdvisorCheckResultResponse($result->toArray());
    }
}
