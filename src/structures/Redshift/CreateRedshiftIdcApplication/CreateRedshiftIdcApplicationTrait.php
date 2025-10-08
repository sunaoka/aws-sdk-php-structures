<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateRedshiftIdcApplication;

trait CreateRedshiftIdcApplicationTrait
{
    /**
     * @param CreateRedshiftIdcApplicationRequest $args
     * @return CreateRedshiftIdcApplicationResponse
     */
    public function createRedshiftIdcApplication(CreateRedshiftIdcApplicationRequest $args)
    {
        $result = parent::createRedshiftIdcApplication($args->toArray());
        return new CreateRedshiftIdcApplicationResponse($result->toArray());
    }
}
