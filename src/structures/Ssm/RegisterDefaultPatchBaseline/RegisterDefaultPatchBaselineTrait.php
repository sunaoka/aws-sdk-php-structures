<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterDefaultPatchBaseline;

trait RegisterDefaultPatchBaselineTrait
{
    /**
     * @param RegisterDefaultPatchBaselineRequest $args
     * @return RegisterDefaultPatchBaselineResponse
     */
    public function registerDefaultPatchBaseline(RegisterDefaultPatchBaselineRequest $args)
    {
        $result = parent::registerDefaultPatchBaseline($args->toArray());
        return new RegisterDefaultPatchBaselineResponse($result->toArray());
    }
}
