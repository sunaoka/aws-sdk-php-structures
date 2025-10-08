<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGlossary;

trait GetGlossaryTrait
{
    /**
     * @param GetGlossaryRequest $args
     * @return GetGlossaryResponse
     */
    public function getGlossary(GetGlossaryRequest $args)
    {
        $result = parent::getGlossary($args->toArray());
        return new GetGlossaryResponse($result->toArray());
    }
}
