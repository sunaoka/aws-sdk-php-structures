<?php

namespace Sunaoka\Aws\Structures\AppSync\DisassociateMergedGraphqlApi;

trait DisassociateMergedGraphqlApiTrait
{
    /**
     * @param DisassociateMergedGraphqlApiRequest $args
     * @return DisassociateMergedGraphqlApiResponse
     */
    public function disassociateMergedGraphqlApi(DisassociateMergedGraphqlApiRequest $args)
    {
        $result = parent::disassociateMergedGraphqlApi($args->toArray());
        return new DisassociateMergedGraphqlApiResponse($result->toArray());
    }
}
