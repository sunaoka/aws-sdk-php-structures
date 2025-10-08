<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointConfigurationForObjectLambda;

trait GetAccessPointConfigurationForObjectLambdaTrait
{
    /**
     * @param GetAccessPointConfigurationForObjectLambdaRequest $args
     * @return GetAccessPointConfigurationForObjectLambdaResponse
     */
    public function getAccessPointConfigurationForObjectLambda(GetAccessPointConfigurationForObjectLambdaRequest $args)
    {
        $result = parent::getAccessPointConfigurationForObjectLambda($args->toArray());
        return new GetAccessPointConfigurationForObjectLambdaResponse($result->toArray());
    }
}
