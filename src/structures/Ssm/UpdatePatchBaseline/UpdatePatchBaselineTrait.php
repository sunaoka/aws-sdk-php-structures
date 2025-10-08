<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdatePatchBaseline;

trait UpdatePatchBaselineTrait
{
    /**
     * @param UpdatePatchBaselineRequest $args
     * @return UpdatePatchBaselineResponse
     */
    public function updatePatchBaseline(UpdatePatchBaselineRequest $args)
    {
        $result = parent::updatePatchBaseline($args->toArray());
        return new UpdatePatchBaselineResponse($result->toArray());
    }
}
