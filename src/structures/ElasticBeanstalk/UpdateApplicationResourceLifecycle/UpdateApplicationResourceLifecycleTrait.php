<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplicationResourceLifecycle;

trait UpdateApplicationResourceLifecycleTrait
{
    /**
     * @param UpdateApplicationResourceLifecycleRequest $args
     * @return UpdateApplicationResourceLifecycleResponse
     */
    public function updateApplicationResourceLifecycle(UpdateApplicationResourceLifecycleRequest $args)
    {
        $result = parent::updateApplicationResourceLifecycle($args->toArray());
        return new UpdateApplicationResourceLifecycleResponse($result->toArray());
    }
}
