<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram;

trait DeleteMultiplexProgramTrait
{
    /**
     * @param DeleteMultiplexProgramRequest $args
     * @return DeleteMultiplexProgramResponse
     */
    public function deleteMultiplexProgram(DeleteMultiplexProgramRequest $args)
    {
        $result = parent::deleteMultiplexProgram($args->toArray());
        return new DeleteMultiplexProgramResponse($result->toArray());
    }
}
