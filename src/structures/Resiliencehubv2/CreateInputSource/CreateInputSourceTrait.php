<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateInputSource;

trait CreateInputSourceTrait
{
    /**
     * @param CreateInputSourceRequest $args
     * @return CreateInputSourceResponse
     */
    public function createInputSource(CreateInputSourceRequest $args)
    {
        $result = parent::createInputSource($args->toArray());
        return new CreateInputSourceResponse($result->toArray());
    }
}
