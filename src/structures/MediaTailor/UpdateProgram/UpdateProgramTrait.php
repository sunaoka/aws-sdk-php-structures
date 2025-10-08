<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram;

trait UpdateProgramTrait
{
    /**
     * @param UpdateProgramRequest $args
     * @return UpdateProgramResponse
     */
    public function updateProgram(UpdateProgramRequest $args)
    {
        $result = parent::updateProgram($args->toArray());
        return new UpdateProgramResponse($result->toArray());
    }
}
