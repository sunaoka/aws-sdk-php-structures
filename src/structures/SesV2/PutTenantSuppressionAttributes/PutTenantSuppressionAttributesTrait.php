<?php

namespace Sunaoka\Aws\Structures\SesV2\PutTenantSuppressionAttributes;

trait PutTenantSuppressionAttributesTrait
{
    /**
     * @param PutTenantSuppressionAttributesRequest $args
     * @return PutTenantSuppressionAttributesResponse
     */
    public function putTenantSuppressionAttributes(PutTenantSuppressionAttributesRequest $args)
    {
        $result = parent::putTenantSuppressionAttributes($args->toArray());
        return new PutTenantSuppressionAttributesResponse($result->toArray());
    }
}
