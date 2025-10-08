<?php

namespace Sunaoka\Aws\Structures\Appstream\StopAppBlockBuilder;

trait StopAppBlockBuilderTrait
{
    /**
     * @param StopAppBlockBuilderRequest $args
     * @return StopAppBlockBuilderResponse
     */
    public function stopAppBlockBuilder(StopAppBlockBuilderRequest $args)
    {
        $result = parent::stopAppBlockBuilder($args->toArray());
        return new StopAppBlockBuilderResponse($result->toArray());
    }
}
