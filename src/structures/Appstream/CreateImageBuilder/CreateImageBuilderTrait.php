<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilder;

trait CreateImageBuilderTrait
{
    /**
     * @param CreateImageBuilderRequest $args
     * @return CreateImageBuilderResponse
     */
    public function createImageBuilder(CreateImageBuilderRequest $args)
    {
        $result = parent::createImageBuilder($args->toArray());
        return new CreateImageBuilderResponse($result->toArray());
    }
}
