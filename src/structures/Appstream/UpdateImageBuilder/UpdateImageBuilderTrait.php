<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateImageBuilder;

trait UpdateImageBuilderTrait
{
    /**
     * @param UpdateImageBuilderRequest $args
     * @return UpdateImageBuilderResponse
     */
    public function updateImageBuilder(UpdateImageBuilderRequest $args)
    {
        $result = parent::updateImageBuilder($args->toArray());
        return new UpdateImageBuilderResponse($result->toArray());
    }
}
