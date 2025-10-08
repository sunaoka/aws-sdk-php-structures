<?php

namespace Sunaoka\Aws\Structures\FMS\ListComplianceStatus;

trait ListComplianceStatusTrait
{
    /**
     * @param ListComplianceStatusRequest $args
     * @return ListComplianceStatusResponse
     */
    public function listComplianceStatus(ListComplianceStatusRequest $args)
    {
        $result = parent::listComplianceStatus($args->toArray());
        return new ListComplianceStatusResponse($result->toArray());
    }
}
