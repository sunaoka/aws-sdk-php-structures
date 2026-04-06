<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListThreatEntitySets;

trait ListThreatEntitySetsTrait
{
    /**
     * @param ListThreatEntitySetsRequest $args
     * @return ListThreatEntitySetsResponse
     */
    public function listThreatEntitySets(ListThreatEntitySetsRequest $args)
    {
        $result = parent::listThreatEntitySets($args->toArray());
        return new ListThreatEntitySetsResponse($result->toArray());
    }
}
