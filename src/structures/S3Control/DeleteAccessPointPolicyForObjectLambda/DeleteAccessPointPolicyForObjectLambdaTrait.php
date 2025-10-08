<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessPointPolicyForObjectLambda;

trait DeleteAccessPointPolicyForObjectLambdaTrait
{
    /**
     * @param DeleteAccessPointPolicyForObjectLambdaRequest $args
     * @return void
     */
    public function deleteAccessPointPolicyForObjectLambda(DeleteAccessPointPolicyForObjectLambdaRequest $args)
    {
        parent::deleteAccessPointPolicyForObjectLambda($args->toArray());
    }
}
