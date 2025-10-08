<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateApplicationInstance;

trait CreateApplicationInstanceTrait
{
    /**
     * @param CreateApplicationInstanceRequest $args
     * @return CreateApplicationInstanceResponse
     */
    public function createApplicationInstance(CreateApplicationInstanceRequest $args)
    {
        $result = parent::createApplicationInstance($args->toArray());
        return new CreateApplicationInstanceResponse($result->toArray());
    }
}
