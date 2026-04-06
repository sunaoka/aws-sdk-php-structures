<?php

namespace Sunaoka\Aws\Structures\Iam\ListOrganizationsFeatures;

trait ListOrganizationsFeaturesTrait
{
    /**
     * @param ListOrganizationsFeaturesRequest $args
     * @return ListOrganizationsFeaturesResponse
     */
    public function listOrganizationsFeatures(ListOrganizationsFeaturesRequest $args)
    {
        $result = parent::listOrganizationsFeatures($args->toArray());
        return new ListOrganizationsFeaturesResponse($result->toArray());
    }
}
