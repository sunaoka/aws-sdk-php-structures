<?php

namespace Sunaoka\Aws\Structures\RAM\DeleteResourceShare;

trait DeleteResourceShareTrait
{
    /**
     * @param DeleteResourceShareRequest $args
     * @return DeleteResourceShareResponse
     */
    public function deleteResourceShare(DeleteResourceShareRequest $args)
    {
        $result = parent::deleteResourceShare($args->toArray());
        return new DeleteResourceShareResponse($result->toArray());
    }
}
