<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossaryTerm;

trait CreateGlossaryTermTrait
{
    /**
     * @param CreateGlossaryTermRequest $args
     * @return CreateGlossaryTermResponse
     */
    public function createGlossaryTerm(CreateGlossaryTermRequest $args)
    {
        $result = parent::createGlossaryTerm($args->toArray());
        return new CreateGlossaryTermResponse($result->toArray());
    }
}
