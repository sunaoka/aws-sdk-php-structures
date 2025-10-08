<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteProgram;

trait DeleteProgramTrait
{
    /**
     * @param DeleteProgramRequest $args
     * @return DeleteProgramResponse
     */
    public function deleteProgram(DeleteProgramRequest $args)
    {
        $result = parent::deleteProgram($args->toArray());
        return new DeleteProgramResponse($result->toArray());
    }
}
