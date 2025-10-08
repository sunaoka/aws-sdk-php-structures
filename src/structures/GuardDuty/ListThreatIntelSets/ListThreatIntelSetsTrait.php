<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListThreatIntelSets;

trait ListThreatIntelSetsTrait
{
    /**
     * @param ListThreatIntelSetsRequest $args
     * @return ListThreatIntelSetsResponse
     */
    public function listThreatIntelSets(ListThreatIntelSetsRequest $args)
    {
        $result = parent::listThreatIntelSets($args->toArray());
        return new ListThreatIntelSetsResponse($result->toArray());
    }
}
