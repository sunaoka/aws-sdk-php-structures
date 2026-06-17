<?php

namespace Sunaoka\Aws\Structures\Glue\GetGlossary;

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
