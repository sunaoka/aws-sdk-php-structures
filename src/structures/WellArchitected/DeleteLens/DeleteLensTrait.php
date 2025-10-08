<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteLens;

trait DeleteLensTrait
{
    /**
     * @param DeleteLensRequest $args
     * @return void
     */
    public function deleteLens(DeleteLensRequest $args)
    {
        parent::deleteLens($args->toArray());
    }
}
