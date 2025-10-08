<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityNotificationAttributes;

trait GetIdentityNotificationAttributesTrait
{
    /**
     * @param GetIdentityNotificationAttributesRequest $args
     * @return GetIdentityNotificationAttributesResponse
     */
    public function getIdentityNotificationAttributes(GetIdentityNotificationAttributesRequest $args)
    {
        $result = parent::getIdentityNotificationAttributes($args->toArray());
        return new GetIdentityNotificationAttributesResponse($result->toArray());
    }
}
