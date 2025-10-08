<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteViewVersion;

trait DeleteViewVersionTrait
{
    /**
     * @param DeleteViewVersionRequest $args
     * @return DeleteViewVersionResponse
     */
    public function deleteViewVersion(DeleteViewVersionRequest $args)
    {
        $result = parent::deleteViewVersion($args->toArray());
        return new DeleteViewVersionResponse($result->toArray());
    }
}
