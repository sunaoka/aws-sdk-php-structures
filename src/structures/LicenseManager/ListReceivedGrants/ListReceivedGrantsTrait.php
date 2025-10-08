<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedGrants;

trait ListReceivedGrantsTrait
{
    /**
     * @param ListReceivedGrantsRequest $args
     * @return ListReceivedGrantsResponse
     */
    public function listReceivedGrants(ListReceivedGrantsRequest $args)
    {
        $result = parent::listReceivedGrants($args->toArray());
        return new ListReceivedGrantsResponse($result->toArray());
    }
}
