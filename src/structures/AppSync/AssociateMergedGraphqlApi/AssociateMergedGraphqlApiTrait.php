<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateMergedGraphqlApi;

trait AssociateMergedGraphqlApiTrait
{
    /**
     * @param AssociateMergedGraphqlApiRequest $args
     * @return AssociateMergedGraphqlApiResponse
     */
    public function associateMergedGraphqlApi(AssociateMergedGraphqlApiRequest $args)
    {
        $result = parent::associateMergedGraphqlApi($args->toArray());
        return new AssociateMergedGraphqlApiResponse($result->toArray());
    }
}
