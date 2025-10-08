<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteLag;

trait DeleteLagTrait
{
    /**
     * @param DeleteLagRequest $args
     * @return DeleteLagResponse
     */
    public function deleteLag(DeleteLagRequest $args)
    {
        $result = parent::deleteLag($args->toArray());
        return new DeleteLagResponse($result->toArray());
    }
}
