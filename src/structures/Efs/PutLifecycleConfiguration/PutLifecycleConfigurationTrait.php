<?php

namespace Sunaoka\Aws\Structures\Efs\PutLifecycleConfiguration;

trait PutLifecycleConfigurationTrait
{
    /**
     * @param PutLifecycleConfigurationRequest $args
     * @return PutLifecycleConfigurationResponse
     */
    public function putLifecycleConfiguration(PutLifecycleConfigurationRequest $args)
    {
        $result = parent::putLifecycleConfiguration($args->toArray());
        return new PutLifecycleConfigurationResponse($result->toArray());
    }
}
