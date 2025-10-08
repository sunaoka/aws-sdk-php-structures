<?php

namespace Sunaoka\Aws\Structures\Ssm\DeletePatchBaseline;

trait DeletePatchBaselineTrait
{
    /**
     * @param DeletePatchBaselineRequest $args
     * @return DeletePatchBaselineResponse
     */
    public function deletePatchBaseline(DeletePatchBaselineRequest $args)
    {
        $result = parent::deletePatchBaseline($args->toArray());
        return new DeletePatchBaselineResponse($result->toArray());
    }
}
