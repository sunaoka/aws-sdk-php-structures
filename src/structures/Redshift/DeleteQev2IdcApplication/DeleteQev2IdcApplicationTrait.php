<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteQev2IdcApplication;

trait DeleteQev2IdcApplicationTrait
{
    /**
     * @param DeleteQev2IdcApplicationRequest $args
     * @return void
     */
    public function deleteQev2IdcApplication(DeleteQev2IdcApplicationRequest $args)
    {
        parent::deleteQev2IdcApplication($args->toArray());
    }
}
