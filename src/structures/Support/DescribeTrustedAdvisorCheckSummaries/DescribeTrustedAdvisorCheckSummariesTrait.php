<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckSummaries;

trait DescribeTrustedAdvisorCheckSummariesTrait
{
    /**
     * @param DescribeTrustedAdvisorCheckSummariesRequest $args
     * @return DescribeTrustedAdvisorCheckSummariesResponse
     */
    public function describeTrustedAdvisorCheckSummaries(DescribeTrustedAdvisorCheckSummariesRequest $args)
    {
        $result = parent::describeTrustedAdvisorCheckSummaries($args->toArray());
        return new DescribeTrustedAdvisorCheckSummariesResponse($result->toArray());
    }
}
