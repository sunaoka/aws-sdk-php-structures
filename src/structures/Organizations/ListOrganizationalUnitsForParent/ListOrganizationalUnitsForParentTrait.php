<?php

namespace Sunaoka\Aws\Structures\Organizations\ListOrganizationalUnitsForParent;

trait ListOrganizationalUnitsForParentTrait
{
    /**
     * @param ListOrganizationalUnitsForParentRequest $args
     * @return ListOrganizationalUnitsForParentResponse
     */
    public function listOrganizationalUnitsForParent(ListOrganizationalUnitsForParentRequest $args)
    {
        $result = parent::listOrganizationalUnitsForParent($args->toArray());
        return new ListOrganizationalUnitsForParentResponse($result->toArray());
    }
}
