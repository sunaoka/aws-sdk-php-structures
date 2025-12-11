<?php

namespace Sunaoka\Aws\Structures\Invoicing\DeleteProcurementPortalPreference;

trait DeleteProcurementPortalPreferenceTrait
{
    /**
     * @param DeleteProcurementPortalPreferenceRequest $args
     * @return DeleteProcurementPortalPreferenceResponse
     */
    public function deleteProcurementPortalPreference(DeleteProcurementPortalPreferenceRequest $args)
    {
        $result = parent::deleteProcurementPortalPreference($args->toArray());
        return new DeleteProcurementPortalPreferenceResponse($result->toArray());
    }
}
