<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlInsightsByControlDomain;

trait ListControlInsightsByControlDomainTrait
{
    /**
     * @param ListControlInsightsByControlDomainRequest $args
     * @return ListControlInsightsByControlDomainResponse
     */
    public function listControlInsightsByControlDomain(ListControlInsightsByControlDomainRequest $args)
    {
        $result = parent::listControlInsightsByControlDomain($args->toArray());
        return new ListControlInsightsByControlDomainResponse($result->toArray());
    }
}
