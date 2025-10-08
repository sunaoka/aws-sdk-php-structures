<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountSuppressionAttributes;

trait PutAccountSuppressionAttributesTrait
{
    /**
     * @param PutAccountSuppressionAttributesRequest $args
     * @return PutAccountSuppressionAttributesResponse
     */
    public function putAccountSuppressionAttributes(PutAccountSuppressionAttributesRequest $args)
    {
        $result = parent::putAccountSuppressionAttributes($args->toArray());
        return new PutAccountSuppressionAttributesResponse($result->toArray());
    }
}
