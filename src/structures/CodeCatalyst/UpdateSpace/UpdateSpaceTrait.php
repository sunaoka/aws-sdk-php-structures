<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\UpdateSpace;

trait UpdateSpaceTrait
{
    /**
     * @param UpdateSpaceRequest $args
     * @return UpdateSpaceResponse
     */
    public function updateSpace(UpdateSpaceRequest $args)
    {
        $result = parent::updateSpace($args->toArray());
        return new UpdateSpaceResponse($result->toArray());
    }
}
