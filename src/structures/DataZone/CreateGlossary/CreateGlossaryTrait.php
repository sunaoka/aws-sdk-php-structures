<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossary;

trait CreateGlossaryTrait
{
    /**
     * @param CreateGlossaryRequest $args
     * @return CreateGlossaryResponse
     */
    public function createGlossary(CreateGlossaryRequest $args)
    {
        $result = parent::createGlossary($args->toArray());
        return new CreateGlossaryResponse($result->toArray());
    }
}
