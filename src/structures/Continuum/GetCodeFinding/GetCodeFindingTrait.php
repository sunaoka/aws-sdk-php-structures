<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding;

trait GetCodeFindingTrait
{
    /**
     * @param GetCodeFindingRequest $args
     * @return GetCodeFindingResponse
     */
    public function getCodeFinding(GetCodeFindingRequest $args)
    {
        $result = parent::getCodeFinding($args->toArray());
        return new GetCodeFindingResponse($result->toArray());
    }
}
