<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPointsForObjectLambda;

trait ListAccessPointsForObjectLambdaTrait
{
    /**
     * @param ListAccessPointsForObjectLambdaRequest $args
     * @return ListAccessPointsForObjectLambdaResponse
     */
    public function listAccessPointsForObjectLambda(ListAccessPointsForObjectLambdaRequest $args)
    {
        $result = parent::listAccessPointsForObjectLambda($args->toArray());
        return new ListAccessPointsForObjectLambdaResponse($result->toArray());
    }
}
