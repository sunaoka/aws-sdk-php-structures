<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCodeFinding;

trait CreateCodeFindingTrait
{
    /**
     * @param CreateCodeFindingRequest $args
     * @return CreateCodeFindingResponse
     */
    public function createCodeFinding(CreateCodeFindingRequest $args)
    {
        $result = parent::createCodeFinding($args->toArray());
        return new CreateCodeFindingResponse($result->toArray());
    }
}
