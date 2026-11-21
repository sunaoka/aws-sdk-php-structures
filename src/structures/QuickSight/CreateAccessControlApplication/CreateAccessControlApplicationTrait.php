<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication;

trait CreateAccessControlApplicationTrait
{
    /**
     * @param CreateAccessControlApplicationRequest $args
     * @return CreateAccessControlApplicationResponse
     */
    public function createAccessControlApplication(CreateAccessControlApplicationRequest $args)
    {
        $result = parent::createAccessControlApplication($args->toArray());
        return new CreateAccessControlApplicationResponse($result->toArray());
    }
}
