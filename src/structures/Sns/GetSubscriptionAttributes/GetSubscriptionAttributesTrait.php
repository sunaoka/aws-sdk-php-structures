<?php

namespace Sunaoka\Aws\Structures\Sns\GetSubscriptionAttributes;

trait GetSubscriptionAttributesTrait
{
    /**
     * @param GetSubscriptionAttributesRequest $args
     * @return GetSubscriptionAttributesResponse
     */
    public function getSubscriptionAttributes(GetSubscriptionAttributesRequest $args)
    {
        $result = parent::getSubscriptionAttributes($args->toArray());
        return new GetSubscriptionAttributesResponse($result->toArray());
    }
}
