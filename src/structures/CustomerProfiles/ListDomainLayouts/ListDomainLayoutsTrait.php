<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListDomainLayouts;

trait ListDomainLayoutsTrait
{
    /**
     * @param ListDomainLayoutsRequest $args
     * @return ListDomainLayoutsResponse
     */
    public function listDomainLayouts(ListDomainLayoutsRequest $args)
    {
        $result = parent::listDomainLayouts($args->toArray());
        return new ListDomainLayoutsResponse($result->toArray());
    }
}
