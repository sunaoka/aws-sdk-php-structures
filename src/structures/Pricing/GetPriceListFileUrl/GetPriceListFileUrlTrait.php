<?php

namespace Sunaoka\Aws\Structures\Pricing\GetPriceListFileUrl;

trait GetPriceListFileUrlTrait
{
    /**
     * @param GetPriceListFileUrlRequest $args
     * @return GetPriceListFileUrlResponse
     */
    public function getPriceListFileUrl(GetPriceListFileUrlRequest $args)
    {
        $result = parent::getPriceListFileUrl($args->toArray());
        return new GetPriceListFileUrlResponse($result->toArray());
    }
}
