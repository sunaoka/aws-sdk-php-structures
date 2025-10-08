<?php

namespace Sunaoka\Aws\Structures\Outposts\UpdateSiteRackPhysicalProperties;

trait UpdateSiteRackPhysicalPropertiesTrait
{
    /**
     * @param UpdateSiteRackPhysicalPropertiesRequest $args
     * @return UpdateSiteRackPhysicalPropertiesResponse
     */
    public function updateSiteRackPhysicalProperties(UpdateSiteRackPhysicalPropertiesRequest $args)
    {
        $result = parent::updateSiteRackPhysicalProperties($args->toArray());
        return new UpdateSiteRackPhysicalPropertiesResponse($result->toArray());
    }
}
