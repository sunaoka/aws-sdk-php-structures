<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplicationVersion;

trait CreateApplicationVersionTrait
{
    /**
     * @param CreateApplicationVersionRequest $args
     * @return CreateApplicationVersionResponse
     */
    public function createApplicationVersion(CreateApplicationVersionRequest $args)
    {
        $result = parent::createApplicationVersion($args->toArray());
        return new CreateApplicationVersionResponse($result->toArray());
    }
}
