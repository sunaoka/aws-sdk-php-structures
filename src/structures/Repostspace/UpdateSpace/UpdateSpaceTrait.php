<?php

namespace Sunaoka\Aws\Structures\Repostspace\UpdateSpace;

trait UpdateSpaceTrait
{
    /**
     * @param UpdateSpaceRequest $args
     * @return void
     */
    public function updateSpace(UpdateSpaceRequest $args)
    {
        parent::updateSpace($args->toArray());
    }
}
