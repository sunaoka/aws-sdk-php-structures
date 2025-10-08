<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings;

trait GetFindingsTrait
{
    /**
     * @param GetFindingsRequest $args
     * @return GetFindingsResponse
     */
    public function getFindings(GetFindingsRequest $args)
    {
        $result = parent::getFindings($args->toArray());
        return new GetFindingsResponse($result->toArray());
    }
}
