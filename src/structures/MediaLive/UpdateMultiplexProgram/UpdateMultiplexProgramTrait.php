<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplexProgram;

trait UpdateMultiplexProgramTrait
{
    /**
     * @param UpdateMultiplexProgramRequest $args
     * @return UpdateMultiplexProgramResponse
     */
    public function updateMultiplexProgram(UpdateMultiplexProgramRequest $args)
    {
        $result = parent::updateMultiplexProgram($args->toArray());
        return new UpdateMultiplexProgramResponse($result->toArray());
    }
}
