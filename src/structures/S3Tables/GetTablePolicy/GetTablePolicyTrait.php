<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTablePolicy;

trait GetTablePolicyTrait
{
    /**
     * @param GetTablePolicyRequest $args
     * @return GetTablePolicyResponse
     */
    public function getTablePolicy(GetTablePolicyRequest $args)
    {
        $result = parent::getTablePolicy($args->toArray());
        return new GetTablePolicyResponse($result->toArray());
    }
}
