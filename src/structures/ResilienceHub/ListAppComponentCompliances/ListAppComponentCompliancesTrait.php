<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentCompliances;

trait ListAppComponentCompliancesTrait
{
    /**
     * @param ListAppComponentCompliancesRequest $args
     * @return ListAppComponentCompliancesResponse
     */
    public function listAppComponentCompliances(ListAppComponentCompliancesRequest $args)
    {
        $result = parent::listAppComponentCompliances($args->toArray());
        return new ListAppComponentCompliancesResponse($result->toArray());
    }
}
