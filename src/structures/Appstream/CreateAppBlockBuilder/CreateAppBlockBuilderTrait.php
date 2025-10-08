<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlockBuilder;

trait CreateAppBlockBuilderTrait
{
    /**
     * @param CreateAppBlockBuilderRequest $args
     * @return CreateAppBlockBuilderResponse
     */
    public function createAppBlockBuilder(CreateAppBlockBuilderRequest $args)
    {
        $result = parent::createAppBlockBuilder($args->toArray());
        return new CreateAppBlockBuilderResponse($result->toArray());
    }
}
