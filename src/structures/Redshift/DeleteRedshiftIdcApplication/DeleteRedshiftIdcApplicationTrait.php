<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteRedshiftIdcApplication;

trait DeleteRedshiftIdcApplicationTrait
{
    /**
     * @param DeleteRedshiftIdcApplicationRequest $args
     * @return void
     */
    public function deleteRedshiftIdcApplication(DeleteRedshiftIdcApplicationRequest $args)
    {
        parent::deleteRedshiftIdcApplication($args->toArray());
    }
}
