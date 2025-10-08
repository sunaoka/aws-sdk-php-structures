<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings;

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
