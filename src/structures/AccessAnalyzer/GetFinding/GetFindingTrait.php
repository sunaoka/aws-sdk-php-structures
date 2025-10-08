<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFinding;

trait GetFindingTrait
{
    /**
     * @param GetFindingRequest $args
     * @return GetFindingResponse
     */
    public function getFinding(GetFindingRequest $args)
    {
        $result = parent::getFinding($args->toArray());
        return new GetFindingResponse($result->toArray());
    }
}
