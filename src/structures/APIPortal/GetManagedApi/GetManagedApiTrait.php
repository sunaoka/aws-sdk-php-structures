<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetManagedApi;

trait GetManagedApiTrait
{
    /**
     * @param GetManagedApiRequest $args
     * @return GetManagedApiResponse
     */
    public function getManagedApi(GetManagedApiRequest $args)
    {
        $result = parent::getManagedApi($args->toArray());
        return new GetManagedApiResponse($result->toArray());
    }
}
