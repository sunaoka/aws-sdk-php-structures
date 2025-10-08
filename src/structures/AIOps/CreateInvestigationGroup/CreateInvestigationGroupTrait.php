<?php

namespace Sunaoka\Aws\Structures\AIOps\CreateInvestigationGroup;

trait CreateInvestigationGroupTrait
{
    /**
     * @param CreateInvestigationGroupRequest $args
     * @return CreateInvestigationGroupResponse
     */
    public function createInvestigationGroup(CreateInvestigationGroupRequest $args)
    {
        $result = parent::createInvestigationGroup($args->toArray());
        return new CreateInvestigationGroupResponse($result->toArray());
    }
}
