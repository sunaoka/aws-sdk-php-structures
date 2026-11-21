<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccessControlApplication;

trait UpdateAccessControlApplicationTrait
{
    /**
     * @param UpdateAccessControlApplicationRequest $args
     * @return UpdateAccessControlApplicationResponse
     */
    public function updateAccessControlApplication(UpdateAccessControlApplicationRequest $args)
    {
        $result = parent::updateAccessControlApplication($args->toArray());
        return new UpdateAccessControlApplicationResponse($result->toArray());
    }
}
