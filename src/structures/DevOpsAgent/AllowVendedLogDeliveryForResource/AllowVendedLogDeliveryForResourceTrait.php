<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AllowVendedLogDeliveryForResource;

trait AllowVendedLogDeliveryForResourceTrait
{
    /**
     * @param AllowVendedLogDeliveryForResourceRequest $args
     * @return AllowVendedLogDeliveryForResourceResponse
     */
    public function allowVendedLogDeliveryForResource(AllowVendedLogDeliveryForResourceRequest $args)
    {
        $result = parent::allowVendedLogDeliveryForResource($args->toArray());
        return new AllowVendedLogDeliveryForResourceResponse($result->toArray());
    }
}
