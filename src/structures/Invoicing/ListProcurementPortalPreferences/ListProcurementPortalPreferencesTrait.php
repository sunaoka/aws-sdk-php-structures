<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortalPreferences;

trait ListProcurementPortalPreferencesTrait
{
    /**
     * @param ListProcurementPortalPreferencesRequest $args
     * @return ListProcurementPortalPreferencesResponse
     */
    public function listProcurementPortalPreferences(ListProcurementPortalPreferencesRequest $args)
    {
        $result = parent::listProcurementPortalPreferences($args->toArray());
        return new ListProcurementPortalPreferencesResponse($result->toArray());
    }
}
