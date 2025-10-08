<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteAccess;

trait DeleteAccessTrait
{
    /**
     * @param DeleteAccessRequest $args
     * @return void
     */
    public function deleteAccess(DeleteAccessRequest $args)
    {
        parent::deleteAccess($args->toArray());
    }
}
