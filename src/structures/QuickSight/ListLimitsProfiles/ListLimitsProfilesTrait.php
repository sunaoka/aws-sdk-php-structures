<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListLimitsProfiles;

trait ListLimitsProfilesTrait
{
    /**
     * @param ListLimitsProfilesRequest $args
     * @return ListLimitsProfilesResponse
     */
    public function listLimitsProfiles(ListLimitsProfilesRequest $args)
    {
        $result = parent::listLimitsProfiles($args->toArray());
        return new ListLimitsProfilesResponse($result->toArray());
    }
}
