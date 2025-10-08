<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate;

trait CreateOTAUpdateTrait
{
    /**
     * @param CreateOTAUpdateRequest $args
     * @return CreateOTAUpdateResponse
     */
    public function createOTAUpdate(CreateOTAUpdateRequest $args)
    {
        $result = parent::createOTAUpdate($args->toArray());
        return new CreateOTAUpdateResponse($result->toArray());
    }
}
