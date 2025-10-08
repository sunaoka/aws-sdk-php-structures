<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedDomainUrl;

trait CreatePresignedDomainUrlTrait
{
    /**
     * @param CreatePresignedDomainUrlRequest $args
     * @return CreatePresignedDomainUrlResponse
     */
    public function createPresignedDomainUrl(CreatePresignedDomainUrlRequest $args)
    {
        $result = parent::createPresignedDomainUrl($args->toArray());
        return new CreatePresignedDomainUrlResponse($result->toArray());
    }
}
