<?php

namespace Sunaoka\Aws\Structures\Sns\DeletePlatformApplication;

trait DeletePlatformApplicationTrait
{
    /**
     * @param DeletePlatformApplicationRequest $args
     * @return void
     */
    public function deletePlatformApplication(DeletePlatformApplicationRequest $args)
    {
        parent::deletePlatformApplication($args->toArray());
    }
}
