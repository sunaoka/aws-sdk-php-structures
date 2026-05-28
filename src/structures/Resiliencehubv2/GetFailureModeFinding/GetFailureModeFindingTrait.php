<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetFailureModeFinding;

trait GetFailureModeFindingTrait
{
    /**
     * @param GetFailureModeFindingRequest $args
     * @return GetFailureModeFindingResponse
     */
    public function getFailureModeFinding(GetFailureModeFindingRequest $args)
    {
        $result = parent::getFailureModeFinding($args->toArray());
        return new GetFailureModeFindingResponse($result->toArray());
    }
}
