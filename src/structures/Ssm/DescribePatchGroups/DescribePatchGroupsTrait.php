<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroups;

trait DescribePatchGroupsTrait
{
    /**
     * @param DescribePatchGroupsRequest $args
     * @return DescribePatchGroupsResponse
     */
    public function describePatchGroups(DescribePatchGroupsRequest $args)
    {
        $result = parent::describePatchGroups($args->toArray());
        return new DescribePatchGroupsResponse($result->toArray());
    }
}
