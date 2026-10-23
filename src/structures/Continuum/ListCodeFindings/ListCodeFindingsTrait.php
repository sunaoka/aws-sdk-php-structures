<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeFindings;

trait ListCodeFindingsTrait
{
    /**
     * @param ListCodeFindingsRequest $args
     * @return ListCodeFindingsResponse
     */
    public function listCodeFindings(ListCodeFindingsRequest $args)
    {
        $result = parent::listCodeFindings($args->toArray());
        return new ListCodeFindingsResponse($result->toArray());
    }
}
