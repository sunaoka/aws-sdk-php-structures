<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomainLayout;

trait GetDomainLayoutTrait
{
    /**
     * @param GetDomainLayoutRequest $args
     * @return GetDomainLayoutResponse
     */
    public function getDomainLayout(GetDomainLayoutRequest $args)
    {
        $result = parent::getDomainLayout($args->toArray());
        return new GetDomainLayoutResponse($result->toArray());
    }
}
