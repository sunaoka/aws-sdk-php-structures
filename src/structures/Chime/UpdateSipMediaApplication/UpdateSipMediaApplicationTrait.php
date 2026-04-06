<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateSipMediaApplication;

trait UpdateSipMediaApplicationTrait
{
    /**
     * @param UpdateSipMediaApplicationRequest $args
     * @return UpdateSipMediaApplicationResponse
     */
    public function updateSipMediaApplication(UpdateSipMediaApplicationRequest $args)
    {
        $result = parent::updateSipMediaApplication($args->toArray());
        return new UpdateSipMediaApplicationResponse($result->toArray());
    }
}
