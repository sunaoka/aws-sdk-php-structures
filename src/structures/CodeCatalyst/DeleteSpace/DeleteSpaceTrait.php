<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\DeleteSpace;

trait DeleteSpaceTrait
{
    /**
     * @param DeleteSpaceRequest $args
     * @return DeleteSpaceResponse
     */
    public function deleteSpace(DeleteSpaceRequest $args)
    {
        $result = parent::deleteSpace($args->toArray());
        return new DeleteSpaceResponse($result->toArray());
    }
}
