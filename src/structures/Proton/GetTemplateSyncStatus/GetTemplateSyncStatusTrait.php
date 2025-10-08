<?php

namespace Sunaoka\Aws\Structures\Proton\GetTemplateSyncStatus;

trait GetTemplateSyncStatusTrait
{
    /**
     * @param GetTemplateSyncStatusRequest $args
     * @return GetTemplateSyncStatusResponse
     */
    public function getTemplateSyncStatus(GetTemplateSyncStatusRequest $args)
    {
        $result = parent::getTemplateSyncStatus($args->toArray());
        return new GetTemplateSyncStatusResponse($result->toArray());
    }
}
