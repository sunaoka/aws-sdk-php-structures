<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteAppBlockBuilder;

trait DeleteAppBlockBuilderTrait
{
    /**
     * @param DeleteAppBlockBuilderRequest $args
     * @return DeleteAppBlockBuilderResponse
     */
    public function deleteAppBlockBuilder(DeleteAppBlockBuilderRequest $args)
    {
        $result = parent::deleteAppBlockBuilder($args->toArray());
        return new DeleteAppBlockBuilderResponse($result->toArray());
    }
}
