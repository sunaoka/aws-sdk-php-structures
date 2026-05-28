<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListFailureModeFindings;

trait ListFailureModeFindingsTrait
{
    /**
     * @param ListFailureModeFindingsRequest $args
     * @return ListFailureModeFindingsResponse
     */
    public function listFailureModeFindings(ListFailureModeFindingsRequest $args)
    {
        $result = parent::listFailureModeFindings($args->toArray());
        return new ListFailureModeFindingsResponse($result->toArray());
    }
}
