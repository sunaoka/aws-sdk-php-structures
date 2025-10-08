<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram;

trait CreateProgramTrait
{
    /**
     * @param CreateProgramRequest $args
     * @return CreateProgramResponse
     */
    public function createProgram(CreateProgramRequest $args)
    {
        $result = parent::createProgram($args->toArray());
        return new CreateProgramResponse($result->toArray());
    }
}
