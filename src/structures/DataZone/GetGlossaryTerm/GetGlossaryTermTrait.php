<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGlossaryTerm;

trait GetGlossaryTermTrait
{
    /**
     * @param GetGlossaryTermRequest $args
     * @return GetGlossaryTermResponse
     */
    public function getGlossaryTerm(GetGlossaryTermRequest $args)
    {
        $result = parent::getGlossaryTerm($args->toArray());
        return new GetGlossaryTermResponse($result->toArray());
    }
}
