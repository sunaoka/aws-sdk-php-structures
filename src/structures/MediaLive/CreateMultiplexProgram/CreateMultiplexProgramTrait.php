<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplexProgram;

trait CreateMultiplexProgramTrait
{
    /**
     * @param CreateMultiplexProgramRequest $args
     * @return CreateMultiplexProgramResponse
     */
    public function createMultiplexProgram(CreateMultiplexProgramRequest $args)
    {
        $result = parent::createMultiplexProgram($args->toArray());
        return new CreateMultiplexProgramResponse($result->toArray());
    }
}
