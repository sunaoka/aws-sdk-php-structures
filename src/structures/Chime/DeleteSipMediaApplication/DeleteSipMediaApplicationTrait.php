<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteSipMediaApplication;

trait DeleteSipMediaApplicationTrait
{
    /**
     * @param DeleteSipMediaApplicationRequest $args
     * @return void
     */
    public function deleteSipMediaApplication(DeleteSipMediaApplicationRequest $args)
    {
        parent::deleteSipMediaApplication($args->toArray());
    }
}
