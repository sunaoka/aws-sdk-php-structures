<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteDomainLayout;

trait DeleteDomainLayoutTrait
{
    /**
     * @param DeleteDomainLayoutRequest $args
     * @return DeleteDomainLayoutResponse
     */
    public function deleteDomainLayout(DeleteDomainLayoutRequest $args)
    {
        $result = parent::deleteDomainLayout($args->toArray());
        return new DeleteDomainLayoutResponse($result->toArray());
    }
}
