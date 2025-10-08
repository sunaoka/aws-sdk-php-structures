<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutAccountSendingAttributes;

trait PutAccountSendingAttributesTrait
{
    /**
     * @param PutAccountSendingAttributesRequest $args
     * @return PutAccountSendingAttributesResponse
     */
    public function putAccountSendingAttributes(PutAccountSendingAttributesRequest $args)
    {
        $result = parent::putAccountSendingAttributes($args->toArray());
        return new PutAccountSendingAttributesResponse($result->toArray());
    }
}
