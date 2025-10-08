<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorChecks;

trait DescribeTrustedAdvisorChecksTrait
{
    /**
     * @param DescribeTrustedAdvisorChecksRequest $args
     * @return DescribeTrustedAdvisorChecksResponse
     */
    public function describeTrustedAdvisorChecks(DescribeTrustedAdvisorChecksRequest $args)
    {
        $result = parent::describeTrustedAdvisorChecks($args->toArray());
        return new DescribeTrustedAdvisorChecksResponse($result->toArray());
    }
}
