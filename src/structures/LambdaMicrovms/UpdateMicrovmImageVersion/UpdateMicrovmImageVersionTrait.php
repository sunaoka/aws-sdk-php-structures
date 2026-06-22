<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\UpdateMicrovmImageVersion;

trait UpdateMicrovmImageVersionTrait
{
    /**
     * @param UpdateMicrovmImageVersionRequest $args
     * @return UpdateMicrovmImageVersionResponse
     */
    public function updateMicrovmImageVersion(UpdateMicrovmImageVersionRequest $args)
    {
        $result = parent::updateMicrovmImageVersion($args->toArray());
        return new UpdateMicrovmImageVersionResponse($result->toArray());
    }
}
