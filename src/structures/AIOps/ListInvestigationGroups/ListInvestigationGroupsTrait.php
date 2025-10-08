<?php

namespace Sunaoka\Aws\Structures\AIOps\ListInvestigationGroups;

trait ListInvestigationGroupsTrait
{
    /**
     * @param ListInvestigationGroupsRequest $args
     * @return ListInvestigationGroupsResponse
     */
    public function listInvestigationGroups(ListInvestigationGroupsRequest $args)
    {
        $result = parent::listInvestigationGroups($args->toArray());
        return new ListInvestigationGroupsResponse($result->toArray());
    }
}
