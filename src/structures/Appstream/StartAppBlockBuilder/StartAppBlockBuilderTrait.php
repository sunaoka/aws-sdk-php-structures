<?php

namespace Sunaoka\Aws\Structures\Appstream\StartAppBlockBuilder;

trait StartAppBlockBuilderTrait
{
    /**
     * @param StartAppBlockBuilderRequest $args
     * @return StartAppBlockBuilderResponse
     */
    public function startAppBlockBuilder(StartAppBlockBuilderRequest $args)
    {
        $result = parent::startAppBlockBuilder($args->toArray());
        return new StartAppBlockBuilderResponse($result->toArray());
    }
}
