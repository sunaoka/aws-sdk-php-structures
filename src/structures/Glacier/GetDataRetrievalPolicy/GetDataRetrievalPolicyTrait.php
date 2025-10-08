<?php

namespace Sunaoka\Aws\Structures\Glacier\GetDataRetrievalPolicy;

trait GetDataRetrievalPolicyTrait
{
    /**
     * @param GetDataRetrievalPolicyRequest $args
     * @return GetDataRetrievalPolicyResponse
     */
    public function getDataRetrievalPolicy(GetDataRetrievalPolicyRequest $args)
    {
        $result = parent::getDataRetrievalPolicy($args->toArray());
        return new GetDataRetrievalPolicyResponse($result->toArray());
    }
}
