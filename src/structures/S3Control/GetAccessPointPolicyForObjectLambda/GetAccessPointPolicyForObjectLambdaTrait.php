<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointPolicyForObjectLambda;

trait GetAccessPointPolicyForObjectLambdaTrait
{
    /**
     * @param GetAccessPointPolicyForObjectLambdaRequest $args
     * @return GetAccessPointPolicyForObjectLambdaResponse
     */
    public function getAccessPointPolicyForObjectLambda(GetAccessPointPolicyForObjectLambdaRequest $args)
    {
        $result = parent::getAccessPointPolicyForObjectLambda($args->toArray());
        return new GetAccessPointPolicyForObjectLambdaResponse($result->toArray());
    }
}
