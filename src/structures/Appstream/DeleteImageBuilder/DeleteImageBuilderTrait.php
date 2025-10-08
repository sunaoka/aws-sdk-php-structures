<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImageBuilder;

trait DeleteImageBuilderTrait
{
    /**
     * @param DeleteImageBuilderRequest $args
     * @return DeleteImageBuilderResponse
     */
    public function deleteImageBuilder(DeleteImageBuilderRequest $args)
    {
        $result = parent::deleteImageBuilder($args->toArray());
        return new DeleteImageBuilderResponse($result->toArray());
    }
}
