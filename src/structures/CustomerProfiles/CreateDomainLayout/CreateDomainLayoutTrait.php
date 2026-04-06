<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomainLayout;

trait CreateDomainLayoutTrait
{
    /**
     * @param CreateDomainLayoutRequest $args
     * @return CreateDomainLayoutResponse
     */
    public function createDomainLayout(CreateDomainLayoutRequest $args)
    {
        $result = parent::createDomainLayout($args->toArray());
        return new CreateDomainLayoutResponse($result->toArray());
    }
}
