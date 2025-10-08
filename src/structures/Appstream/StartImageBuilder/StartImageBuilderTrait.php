<?php

namespace Sunaoka\Aws\Structures\Appstream\StartImageBuilder;

trait StartImageBuilderTrait
{
    /**
     * @param StartImageBuilderRequest $args
     * @return StartImageBuilderResponse
     */
    public function startImageBuilder(StartImageBuilderRequest $args)
    {
        $result = parent::startImageBuilder($args->toArray());
        return new StartImageBuilderResponse($result->toArray());
    }
}
