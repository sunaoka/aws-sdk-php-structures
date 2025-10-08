<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ComposeEnvironments;

trait ComposeEnvironmentsTrait
{
    /**
     * @param ComposeEnvironmentsRequest $args
     * @return ComposeEnvironmentsResponse
     */
    public function composeEnvironments(ComposeEnvironmentsRequest $args)
    {
        $result = parent::composeEnvironments($args->toArray());
        return new ComposeEnvironmentsResponse($result->toArray());
    }
}
