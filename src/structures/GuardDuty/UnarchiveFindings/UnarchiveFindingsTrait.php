<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UnarchiveFindings;

trait UnarchiveFindingsTrait
{
    /**
     * @param UnarchiveFindingsRequest $args
     * @return UnarchiveFindingsResponse
     */
    public function unarchiveFindings(UnarchiveFindingsRequest $args)
    {
        $result = parent::unarchiveFindings($args->toArray());
        return new UnarchiveFindingsResponse($result->toArray());
    }
}
