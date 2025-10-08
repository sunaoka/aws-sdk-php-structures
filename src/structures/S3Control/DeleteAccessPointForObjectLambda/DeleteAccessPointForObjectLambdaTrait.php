<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessPointForObjectLambda;

trait DeleteAccessPointForObjectLambdaTrait
{
    /**
     * @param DeleteAccessPointForObjectLambdaRequest $args
     * @return void
     */
    public function deleteAccessPointForObjectLambda(DeleteAccessPointForObjectLambdaRequest $args)
    {
        parent::deleteAccessPointForObjectLambda($args->toArray());
    }
}
