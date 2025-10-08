<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion;

trait CreateComponentVersionTrait
{
    /**
     * @param CreateComponentVersionRequest $args
     * @return CreateComponentVersionResponse
     */
    public function createComponentVersion(CreateComponentVersionRequest $args)
    {
        $result = parent::createComponentVersion($args->toArray());
        return new CreateComponentVersionResponse($result->toArray());
    }
}
