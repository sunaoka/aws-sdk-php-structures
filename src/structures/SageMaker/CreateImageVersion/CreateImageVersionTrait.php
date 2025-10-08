<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateImageVersion;

trait CreateImageVersionTrait
{
    /**
     * @param CreateImageVersionRequest $args
     * @return CreateImageVersionResponse
     */
    public function createImageVersion(CreateImageVersionRequest $args)
    {
        $result = parent::createImageVersion($args->toArray());
        return new CreateImageVersionResponse($result->toArray());
    }
}
