<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ApplyEnvironmentManagedAction;

trait ApplyEnvironmentManagedActionTrait
{
    /**
     * @param ApplyEnvironmentManagedActionRequest $args
     * @return ApplyEnvironmentManagedActionResponse
     */
    public function applyEnvironmentManagedAction(ApplyEnvironmentManagedActionRequest $args)
    {
        $result = parent::applyEnvironmentManagedAction($args->toArray());
        return new ApplyEnvironmentManagedActionResponse($result->toArray());
    }
}
