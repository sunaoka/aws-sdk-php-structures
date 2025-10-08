<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteResourcesByExternalId;

trait DeleteResourcesByExternalIdTrait
{
    /**
     * @param DeleteResourcesByExternalIdRequest $args
     * @return DeleteResourcesByExternalIdResponse
     */
    public function deleteResourcesByExternalId(DeleteResourcesByExternalIdRequest $args)
    {
        $result = parent::deleteResourcesByExternalId($args->toArray());
        return new DeleteResourcesByExternalIdResponse($result->toArray());
    }
}
