<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyRedshiftIdcApplication;

trait ModifyRedshiftIdcApplicationTrait
{
    /**
     * @param ModifyRedshiftIdcApplicationRequest $args
     * @return ModifyRedshiftIdcApplicationResponse
     */
    public function modifyRedshiftIdcApplication(ModifyRedshiftIdcApplicationRequest $args)
    {
        $result = parent::modifyRedshiftIdcApplication($args->toArray());
        return new ModifyRedshiftIdcApplicationResponse($result->toArray());
    }
}
