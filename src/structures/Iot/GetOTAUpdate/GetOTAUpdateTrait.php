<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate;

trait GetOTAUpdateTrait
{
    /**
     * @param GetOTAUpdateRequest $args
     * @return GetOTAUpdateResponse
     */
    public function getOTAUpdate(GetOTAUpdateRequest $args)
    {
        $result = parent::getOTAUpdate($args->toArray());
        return new GetOTAUpdateResponse($result->toArray());
    }
}
