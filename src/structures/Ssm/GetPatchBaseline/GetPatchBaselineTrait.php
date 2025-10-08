<?php

namespace Sunaoka\Aws\Structures\Ssm\GetPatchBaseline;

trait GetPatchBaselineTrait
{
    /**
     * @param GetPatchBaselineRequest $args
     * @return GetPatchBaselineResponse
     */
    public function getPatchBaseline(GetPatchBaselineRequest $args)
    {
        $result = parent::getPatchBaseline($args->toArray());
        return new GetPatchBaselineResponse($result->toArray());
    }
}
