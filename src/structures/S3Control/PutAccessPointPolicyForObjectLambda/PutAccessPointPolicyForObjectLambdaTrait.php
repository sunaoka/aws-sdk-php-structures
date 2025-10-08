<?php

namespace Sunaoka\Aws\Structures\S3Control\PutAccessPointPolicyForObjectLambda;

trait PutAccessPointPolicyForObjectLambdaTrait
{
    /**
     * @param PutAccessPointPolicyForObjectLambdaRequest $args
     * @return void
     */
    public function putAccessPointPolicyForObjectLambda(PutAccessPointPolicyForObjectLambdaRequest $args)
    {
        parent::putAccessPointPolicyForObjectLambda($args->toArray());
    }
}
