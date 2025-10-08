<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteRun;

trait DeleteRunTrait
{
    /**
     * @param DeleteRunRequest $args
     * @return DeleteRunResponse
     */
    public function deleteRun(DeleteRunRequest $args)
    {
        $result = parent::deleteRun($args->toArray());
        return new DeleteRunResponse($result->toArray());
    }
}
