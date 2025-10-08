<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteTableVersion;

trait DeleteTableVersionTrait
{
    /**
     * @param DeleteTableVersionRequest $args
     * @return DeleteTableVersionResponse
     */
    public function deleteTableVersion(DeleteTableVersionRequest $args)
    {
        $result = parent::deleteTableVersion($args->toArray());
        return new DeleteTableVersionResponse($result->toArray());
    }
}
