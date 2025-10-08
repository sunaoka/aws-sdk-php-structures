<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateApplicationVersion;

trait UpdateApplicationVersionTrait
{
    /**
     * @param UpdateApplicationVersionRequest $args
     * @return UpdateApplicationVersionResponse
     */
    public function updateApplicationVersion(UpdateApplicationVersionRequest $args)
    {
        $result = parent::updateApplicationVersion($args->toArray());
        return new UpdateApplicationVersionResponse($result->toArray());
    }
}
