<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateAppBlockBuilder;

trait UpdateAppBlockBuilderTrait
{
    /**
     * @param UpdateAppBlockBuilderRequest $args
     * @return UpdateAppBlockBuilderResponse
     */
    public function updateAppBlockBuilder(UpdateAppBlockBuilderRequest $args)
    {
        $result = parent::updateAppBlockBuilder($args->toArray());
        return new UpdateAppBlockBuilderResponse($result->toArray());
    }
}
