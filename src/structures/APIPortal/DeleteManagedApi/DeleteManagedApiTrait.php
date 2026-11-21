<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteManagedApi;

trait DeleteManagedApiTrait
{
    /**
     * @param DeleteManagedApiRequest $args
     * @return DeleteManagedApiResponse
     */
    public function deleteManagedApi(DeleteManagedApiRequest $args)
    {
        $result = parent::deleteManagedApi($args->toArray());
        return new DeleteManagedApiResponse($result->toArray());
    }
}
