<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlDomainInsights;

trait ListControlDomainInsightsTrait
{
    /**
     * @param ListControlDomainInsightsRequest $args
     * @return ListControlDomainInsightsResponse
     */
    public function listControlDomainInsights(ListControlDomainInsightsRequest $args)
    {
        $result = parent::listControlDomainInsights($args->toArray());
        return new ListControlDomainInsightsResponse($result->toArray());
    }
}
