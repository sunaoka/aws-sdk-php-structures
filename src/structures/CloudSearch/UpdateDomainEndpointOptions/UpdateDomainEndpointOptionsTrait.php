<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateDomainEndpointOptions;

trait UpdateDomainEndpointOptionsTrait
{
    /**
     * @param UpdateDomainEndpointOptionsRequest $args
     * @return UpdateDomainEndpointOptionsResponse
     */
    public function updateDomainEndpointOptions(UpdateDomainEndpointOptionsRequest $args)
    {
        $result = parent::updateDomainEndpointOptions($args->toArray());
        return new UpdateDomainEndpointOptionsResponse($result->toArray());
    }
}
