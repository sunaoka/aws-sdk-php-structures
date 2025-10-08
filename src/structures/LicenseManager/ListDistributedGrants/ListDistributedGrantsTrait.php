<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListDistributedGrants;

trait ListDistributedGrantsTrait
{
    /**
     * @param ListDistributedGrantsRequest $args
     * @return ListDistributedGrantsResponse
     */
    public function listDistributedGrants(ListDistributedGrantsRequest $args)
    {
        $result = parent::listDistributedGrants($args->toArray());
        return new ListDistributedGrantsResponse($result->toArray());
    }
}
