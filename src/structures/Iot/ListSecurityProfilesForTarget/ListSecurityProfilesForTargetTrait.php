<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfilesForTarget;

trait ListSecurityProfilesForTargetTrait
{
    /**
     * @param ListSecurityProfilesForTargetRequest $args
     * @return ListSecurityProfilesForTargetResponse
     */
    public function listSecurityProfilesForTarget(ListSecurityProfilesForTargetRequest $args)
    {
        $result = parent::listSecurityProfilesForTarget($args->toArray());
        return new ListSecurityProfilesForTargetResponse($result->toArray());
    }
}
