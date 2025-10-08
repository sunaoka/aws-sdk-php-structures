<?php

namespace Sunaoka\Aws\Structures\Panorama\RemoveApplicationInstance;

trait RemoveApplicationInstanceTrait
{
    /**
     * @param RemoveApplicationInstanceRequest $args
     * @return RemoveApplicationInstanceResponse
     */
    public function removeApplicationInstance(RemoveApplicationInstanceRequest $args)
    {
        $result = parent::removeApplicationInstance($args->toArray());
        return new RemoveApplicationInstanceResponse($result->toArray());
    }
}
