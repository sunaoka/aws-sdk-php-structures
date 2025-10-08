<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainDetail;

trait GetDomainDetailTrait
{
    /**
     * @param GetDomainDetailRequest $args
     * @return GetDomainDetailResponse
     */
    public function getDomainDetail(GetDomainDetailRequest $args)
    {
        $result = parent::getDomainDetail($args->toArray());
        return new GetDomainDetailResponse($result->toArray());
    }
}
