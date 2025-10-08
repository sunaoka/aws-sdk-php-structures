<?php

namespace Sunaoka\Aws\Structures\Macie2\ListFindings;

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
