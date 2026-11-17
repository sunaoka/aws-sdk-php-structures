<?php

namespace Sunaoka\Aws\Structures\Health\ConfigureTagsForOrganization;

trait ConfigureTagsForOrganizationTrait
{
    /**
     * @param ConfigureTagsForOrganizationRequest $args
     * @return ConfigureTagsForOrganizationResponse
     */
    public function configureTagsForOrganization(ConfigureTagsForOrganizationRequest $args)
    {
        $result = parent::configureTagsForOrganization($args->toArray());
        return new ConfigureTagsForOrganizationResponse($result->toArray());
    }
}
