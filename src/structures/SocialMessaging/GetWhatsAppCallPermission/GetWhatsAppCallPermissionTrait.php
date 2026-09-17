<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppCallPermission;

trait GetWhatsAppCallPermissionTrait
{
    /**
     * @param GetWhatsAppCallPermissionRequest $args
     * @return GetWhatsAppCallPermissionResponse
     */
    public function getWhatsAppCallPermission(GetWhatsAppCallPermissionRequest $args)
    {
        $result = parent::getWhatsAppCallPermission($args->toArray());
        return new GetWhatsAppCallPermissionResponse($result->toArray());
    }
}
