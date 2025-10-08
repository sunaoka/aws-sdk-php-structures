<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteShare;

trait DeleteShareTrait
{
    /**
     * @param DeleteShareRequest $args
     * @return DeleteShareResponse
     */
    public function deleteShare(DeleteShareRequest $args)
    {
        $result = parent::deleteShare($args->toArray());
        return new DeleteShareResponse($result->toArray());
    }
}
