<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\DeleteMicrovmImageVersion;

trait DeleteMicrovmImageVersionTrait
{
    /**
     * @param DeleteMicrovmImageVersionRequest $args
     * @return DeleteMicrovmImageVersionResponse
     */
    public function deleteMicrovmImageVersion(DeleteMicrovmImageVersionRequest $args)
    {
        $result = parent::deleteMicrovmImageVersion($args->toArray());
        return new DeleteMicrovmImageVersionResponse($result->toArray());
    }
}
