<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListSecurityRequirementPacks;

trait ListSecurityRequirementPacksTrait
{
    /**
     * @param ListSecurityRequirementPacksRequest $args
     * @return ListSecurityRequirementPacksResponse
     */
    public function listSecurityRequirementPacks(ListSecurityRequirementPacksRequest $args)
    {
        $result = parent::listSecurityRequirementPacks($args->toArray());
        return new ListSecurityRequirementPacksResponse($result->toArray());
    }
}
