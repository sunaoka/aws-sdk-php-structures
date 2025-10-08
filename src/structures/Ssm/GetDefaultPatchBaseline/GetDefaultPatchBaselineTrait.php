<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDefaultPatchBaseline;

trait GetDefaultPatchBaselineTrait
{
    /**
     * @param GetDefaultPatchBaselineRequest $args
     * @return GetDefaultPatchBaselineResponse
     */
    public function getDefaultPatchBaseline(GetDefaultPatchBaselineRequest $args)
    {
        $result = parent::getDefaultPatchBaseline($args->toArray());
        return new GetDefaultPatchBaselineResponse($result->toArray());
    }
}
