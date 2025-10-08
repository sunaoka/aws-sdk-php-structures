<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\TerminateEnvironment;

trait TerminateEnvironmentTrait
{
    /**
     * @param TerminateEnvironmentRequest $args
     * @return TerminateEnvironmentResponse
     */
    public function terminateEnvironment(TerminateEnvironmentRequest $args)
    {
        $result = parent::terminateEnvironment($args->toArray());
        return new TerminateEnvironmentResponse($result->toArray());
    }
}
