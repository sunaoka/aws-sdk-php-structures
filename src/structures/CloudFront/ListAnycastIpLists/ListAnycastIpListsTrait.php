<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListAnycastIpLists;

trait ListAnycastIpListsTrait
{
    /**
     * @param ListAnycastIpListsRequest $args
     * @return ListAnycastIpListsResponse
     */
    public function listAnycastIpLists(ListAnycastIpListsRequest $args)
    {
        $result = parent::listAnycastIpLists($args->toArray());
        return new ListAnycastIpListsResponse($result->toArray());
    }
}
