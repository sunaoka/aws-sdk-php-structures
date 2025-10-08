<?php

namespace Sunaoka\Aws\Structures\S3Control\PutAccessPointConfigurationForObjectLambda;

trait PutAccessPointConfigurationForObjectLambdaTrait
{
    /**
     * @param PutAccessPointConfigurationForObjectLambdaRequest $args
     * @return void
     */
    public function putAccessPointConfigurationForObjectLambda(
        PutAccessPointConfigurationForObjectLambdaRequest $args,
    ) {
        parent::putAccessPointConfigurationForObjectLambda($args->toArray());
    }
}
