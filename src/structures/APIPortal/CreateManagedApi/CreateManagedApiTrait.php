<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateManagedApi;

trait CreateManagedApiTrait
{
    /**
     * @param CreateManagedApiRequest $args
     * @return CreateManagedApiResponse
     */
    public function createManagedApi(CreateManagedApiRequest $args)
    {
        $result = parent::createManagedApi($args->toArray());
        return new CreateManagedApiResponse($result->toArray());
    }
}
