<?php

namespace Sunaoka\Aws\Structures\Support\RefreshTrustedAdvisorCheck;

trait RefreshTrustedAdvisorCheckTrait
{
    /**
     * @param RefreshTrustedAdvisorCheckRequest $args
     * @return RefreshTrustedAdvisorCheckResponse
     */
    public function refreshTrustedAdvisorCheck(RefreshTrustedAdvisorCheckRequest $args)
    {
        $result = parent::refreshTrustedAdvisorCheck($args->toArray());
        return new RefreshTrustedAdvisorCheckResponse($result->toArray());
    }
}
