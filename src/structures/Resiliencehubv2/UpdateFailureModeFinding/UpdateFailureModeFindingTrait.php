<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateFailureModeFinding;

trait UpdateFailureModeFindingTrait
{
    /**
     * @param UpdateFailureModeFindingRequest $args
     * @return UpdateFailureModeFindingResponse
     */
    public function updateFailureModeFinding(UpdateFailureModeFindingRequest $args)
    {
        $result = parent::updateFailureModeFinding($args->toArray());
        return new UpdateFailureModeFindingResponse($result->toArray());
    }
}
