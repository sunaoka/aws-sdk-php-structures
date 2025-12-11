<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetProcurementPortalPreference;

trait GetProcurementPortalPreferenceTrait
{
    /**
     * @param GetProcurementPortalPreferenceRequest $args
     * @return GetProcurementPortalPreferenceResponse
     */
    public function getProcurementPortalPreference(GetProcurementPortalPreferenceRequest $args)
    {
        $result = parent::getProcurementPortalPreference($args->toArray());
        return new GetProcurementPortalPreferenceResponse($result->toArray());
    }
}
