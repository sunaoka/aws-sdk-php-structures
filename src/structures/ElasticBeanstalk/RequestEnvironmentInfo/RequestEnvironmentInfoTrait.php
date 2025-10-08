<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RequestEnvironmentInfo;

trait RequestEnvironmentInfoTrait
{
    /**
     * @param RequestEnvironmentInfoRequest $args
     * @return void
     */
    public function requestEnvironmentInfo(RequestEnvironmentInfoRequest $args)
    {
        parent::requestEnvironmentInfo($args->toArray());
    }
}
