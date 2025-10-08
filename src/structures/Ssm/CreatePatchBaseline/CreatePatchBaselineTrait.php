<?php

namespace Sunaoka\Aws\Structures\Ssm\CreatePatchBaseline;

trait CreatePatchBaselineTrait
{
    /**
     * @param CreatePatchBaselineRequest $args
     * @return CreatePatchBaselineResponse
     */
    public function createPatchBaseline(CreatePatchBaselineRequest $args)
    {
        $result = parent::createPatchBaseline($args->toArray());
        return new CreatePatchBaselineResponse($result->toArray());
    }
}
