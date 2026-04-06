<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\GetTrustStoreRevocationContent;

trait GetTrustStoreRevocationContentTrait
{
    /**
     * @param GetTrustStoreRevocationContentRequest $args
     * @return GetTrustStoreRevocationContentResponse
     */
    public function getTrustStoreRevocationContent(GetTrustStoreRevocationContentRequest $args)
    {
        $result = parent::getTrustStoreRevocationContent($args->toArray());
        return new GetTrustStoreRevocationContentResponse($result->toArray());
    }
}
