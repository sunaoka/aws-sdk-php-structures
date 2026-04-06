<?php

namespace Sunaoka\Aws\Structures\Invoicing\UpdateProcurementPortalPreferenceStatus;

trait UpdateProcurementPortalPreferenceStatusTrait
{
    /**
     * @param UpdateProcurementPortalPreferenceStatusRequest $args
     * @return UpdateProcurementPortalPreferenceStatusResponse
     */
    public function updateProcurementPortalPreferenceStatus(UpdateProcurementPortalPreferenceStatusRequest $args)
    {
        $result = parent::updateProcurementPortalPreferenceStatus($args->toArray());
        return new UpdateProcurementPortalPreferenceStatusResponse($result->toArray());
    }
}
