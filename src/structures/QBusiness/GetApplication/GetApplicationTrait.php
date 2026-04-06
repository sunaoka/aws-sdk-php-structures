<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetApplication;

trait GetApplicationTrait
{
    /**
     * @param GetApplicationRequest $args
     * @return GetApplicationResponse
     */
    public function getApplication(GetApplicationRequest $args)
    {
        $result = parent::getApplication($args->toArray());
        return new GetApplicationResponse($result->toArray());
    }
}
