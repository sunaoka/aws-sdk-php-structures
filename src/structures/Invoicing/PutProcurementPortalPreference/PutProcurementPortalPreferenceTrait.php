<?php

namespace Sunaoka\Aws\Structures\Invoicing\PutProcurementPortalPreference;

trait PutProcurementPortalPreferenceTrait
{
    /**
     * @param PutProcurementPortalPreferenceRequest $args
     * @return PutProcurementPortalPreferenceResponse
     */
    public function putProcurementPortalPreference(PutProcurementPortalPreferenceRequest $args)
    {
        $result = parent::putProcurementPortalPreference($args->toArray());
        return new PutProcurementPortalPreferenceResponse($result->toArray());
    }
}
