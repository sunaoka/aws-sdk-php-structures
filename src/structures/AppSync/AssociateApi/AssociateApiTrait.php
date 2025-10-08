<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateApi;

trait AssociateApiTrait
{
    /**
     * @param AssociateApiRequest $args
     * @return AssociateApiResponse
     */
    public function associateApi(AssociateApiRequest $args)
    {
        $result = parent::associateApi($args->toArray());
        return new AssociateApiResponse($result->toArray());
    }
}
