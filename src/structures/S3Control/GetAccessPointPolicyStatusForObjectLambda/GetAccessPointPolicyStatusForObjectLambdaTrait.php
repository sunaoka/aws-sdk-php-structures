<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointPolicyStatusForObjectLambda;

trait GetAccessPointPolicyStatusForObjectLambdaTrait
{
    /**
     * @param GetAccessPointPolicyStatusForObjectLambdaRequest $args
     * @return GetAccessPointPolicyStatusForObjectLambdaResponse
     */
    public function getAccessPointPolicyStatusForObjectLambda(GetAccessPointPolicyStatusForObjectLambdaRequest $args)
    {
        $result = parent::getAccessPointPolicyStatusForObjectLambda($args->toArray());
        return new GetAccessPointPolicyStatusForObjectLambdaResponse($result->toArray());
    }
}
