<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListFindings;

trait ListFindingsTrait
{
    /**
     * @param ListFindingsRequest $args
     * @return ListFindingsResponse
     */
    public function listFindings(ListFindingsRequest $args)
    {
        $result = parent::listFindings($args->toArray());
        return new ListFindingsResponse($result->toArray());
    }
}
