<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateMapRun;

trait UpdateMapRunTrait
{
    /**
     * @param UpdateMapRunRequest $args
     * @return UpdateMapRunResponse
     */
    public function updateMapRun(UpdateMapRunRequest $args)
    {
        $result = parent::updateMapRun($args->toArray());
        return new UpdateMapRunResponse($result->toArray());
    }
}
