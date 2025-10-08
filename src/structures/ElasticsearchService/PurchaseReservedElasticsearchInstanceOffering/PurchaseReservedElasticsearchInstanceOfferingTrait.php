<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\PurchaseReservedElasticsearchInstanceOffering;

trait PurchaseReservedElasticsearchInstanceOfferingTrait
{
    /**
     * @param PurchaseReservedElasticsearchInstanceOfferingRequest $args
     * @return PurchaseReservedElasticsearchInstanceOfferingResponse
     */
    public function purchaseReservedElasticsearchInstanceOffering(PurchaseReservedElasticsearchInstanceOfferingRequest $args)
    {
        $result = parent::purchaseReservedElasticsearchInstanceOffering($args->toArray());
        return new PurchaseReservedElasticsearchInstanceOfferingResponse($result->toArray());
    }
}
