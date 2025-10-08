<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointForObjectLambda;

trait GetAccessPointForObjectLambdaTrait
{
    /**
     * @param GetAccessPointForObjectLambdaRequest $args
     * @return GetAccessPointForObjectLambdaResponse
     */
    public function getAccessPointForObjectLambda(GetAccessPointForObjectLambdaRequest $args)
    {
        $result = parent::getAccessPointForObjectLambda($args->toArray());
        return new GetAccessPointForObjectLambdaResponse($result->toArray());
    }
}
