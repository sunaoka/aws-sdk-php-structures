<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomainLayout;

trait UpdateDomainLayoutTrait
{
    /**
     * @param UpdateDomainLayoutRequest $args
     * @return UpdateDomainLayoutResponse
     */
    public function updateDomainLayout(UpdateDomainLayoutRequest $args)
    {
        $result = parent::updateDomainLayout($args->toArray());
        return new UpdateDomainLayoutResponse($result->toArray());
    }
}
