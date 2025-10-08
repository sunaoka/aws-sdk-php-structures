<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDefaultQBusinessApplication;

trait UpdateDefaultQBusinessApplicationTrait
{
    /**
     * @param UpdateDefaultQBusinessApplicationRequest $args
     * @return UpdateDefaultQBusinessApplicationResponse
     */
    public function updateDefaultQBusinessApplication(UpdateDefaultQBusinessApplicationRequest $args)
    {
        $result = parent::updateDefaultQBusinessApplication($args->toArray());
        return new UpdateDefaultQBusinessApplicationResponse($result->toArray());
    }
}
