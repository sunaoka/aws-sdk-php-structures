<?php

namespace Sunaoka\Aws\Structures\Invoicing\CreateProcurementPortalPreference;

trait CreateProcurementPortalPreferenceTrait
{
    /**
     * @param CreateProcurementPortalPreferenceRequest $args
     * @return CreateProcurementPortalPreferenceResponse
     */
    public function createProcurementPortalPreference(CreateProcurementPortalPreferenceRequest $args)
    {
        $result = parent::createProcurementPortalPreference($args->toArray());
        return new CreateProcurementPortalPreferenceResponse($result->toArray());
    }
}
