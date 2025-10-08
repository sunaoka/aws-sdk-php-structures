<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateSourceGraphqlApi;

trait AssociateSourceGraphqlApiTrait
{
    /**
     * @param AssociateSourceGraphqlApiRequest $args
     * @return AssociateSourceGraphqlApiResponse
     */
    public function associateSourceGraphqlApi(AssociateSourceGraphqlApiRequest $args)
    {
        $result = parent::associateSourceGraphqlApi($args->toArray());
        return new AssociateSourceGraphqlApiResponse($result->toArray());
    }
}
