<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RetrieveEnvironmentInfo;

trait RetrieveEnvironmentInfoTrait
{
    /**
     * @param RetrieveEnvironmentInfoRequest $args
     * @return RetrieveEnvironmentInfoResponse
     */
    public function retrieveEnvironmentInfo(RetrieveEnvironmentInfoRequest $args)
    {
        $result = parent::retrieveEnvironmentInfo($args->toArray());
        return new RetrieveEnvironmentInfoResponse($result->toArray());
    }
}
