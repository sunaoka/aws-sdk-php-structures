<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListTrustedEntitySets;

trait ListTrustedEntitySetsTrait
{
    /**
     * @param ListTrustedEntitySetsRequest $args
     * @return ListTrustedEntitySetsResponse
     */
    public function listTrustedEntitySets(ListTrustedEntitySetsRequest $args)
    {
        $result = parent::listTrustedEntitySets($args->toArray());
        return new ListTrustedEntitySetsResponse($result->toArray());
    }
}
