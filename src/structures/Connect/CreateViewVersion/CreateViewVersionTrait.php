<?php

namespace Sunaoka\Aws\Structures\Connect\CreateViewVersion;

trait CreateViewVersionTrait
{
    /**
     * @param CreateViewVersionRequest $args
     * @return CreateViewVersionResponse
     */
    public function createViewVersion(CreateViewVersionRequest $args)
    {
        $result = parent::createViewVersion($args->toArray());
        return new CreateViewVersionResponse($result->toArray());
    }
}
