<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda;

trait CreateAccessPointForObjectLambdaTrait
{
    /**
     * @param CreateAccessPointForObjectLambdaRequest $args
     * @return CreateAccessPointForObjectLambdaResponse
     */
    public function createAccessPointForObjectLambda(CreateAccessPointForObjectLambdaRequest $args)
    {
        $result = parent::createAccessPointForObjectLambda($args->toArray());
        return new CreateAccessPointForObjectLambdaResponse($result->toArray());
    }
}
