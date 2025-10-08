<?php

namespace Sunaoka\Aws\Structures\Sns\CreatePlatformApplication;

trait CreatePlatformApplicationTrait
{
    /**
     * @param CreatePlatformApplicationRequest $args
     * @return CreatePlatformApplicationResponse
     */
    public function createPlatformApplication(CreatePlatformApplicationRequest $args)
    {
        $result = parent::createPlatformApplication($args->toArray());
        return new CreatePlatformApplicationResponse($result->toArray());
    }
}
