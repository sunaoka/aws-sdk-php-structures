<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplication;

trait CreateApplicationTrait
{
    /**
     * @param CreateApplicationRequest $args
     * @return CreateApplicationResponse
     */
    public function createApplication(CreateApplicationRequest $args)
    {
        $result = parent::createApplication($args->toArray());
        return new CreateApplicationResponse($result->toArray());
    }
}
