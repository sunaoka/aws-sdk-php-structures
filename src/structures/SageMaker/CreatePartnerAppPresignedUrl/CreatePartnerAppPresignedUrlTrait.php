<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerAppPresignedUrl;

trait CreatePartnerAppPresignedUrlTrait
{
    /**
     * @param CreatePartnerAppPresignedUrlRequest $args
     * @return CreatePartnerAppPresignedUrlResponse
     */
    public function createPartnerAppPresignedUrl(CreatePartnerAppPresignedUrlRequest $args)
    {
        $result = parent::createPartnerAppPresignedUrl($args->toArray());
        return new CreatePartnerAppPresignedUrlResponse($result->toArray());
    }
}
