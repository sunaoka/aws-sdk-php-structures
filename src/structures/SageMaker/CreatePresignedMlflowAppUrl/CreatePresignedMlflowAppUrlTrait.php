<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedMlflowAppUrl;

trait CreatePresignedMlflowAppUrlTrait
{
    /**
     * @param CreatePresignedMlflowAppUrlRequest $args
     * @return CreatePresignedMlflowAppUrlResponse
     */
    public function createPresignedMlflowAppUrl(CreatePresignedMlflowAppUrlRequest $args)
    {
        $result = parent::createPresignedMlflowAppUrl($args->toArray());
        return new CreatePresignedMlflowAppUrlResponse($result->toArray());
    }
}
