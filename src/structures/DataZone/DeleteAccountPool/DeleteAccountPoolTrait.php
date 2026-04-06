<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteAccountPool;

trait DeleteAccountPoolTrait
{
    /**
     * @param DeleteAccountPoolRequest $args
     * @return DeleteAccountPoolResponse
     */
    public function deleteAccountPool(DeleteAccountPoolRequest $args)
    {
        $result = parent::deleteAccountPool($args->toArray());
        return new DeleteAccountPoolResponse($result->toArray());
    }
}
