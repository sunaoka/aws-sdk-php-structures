<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityHeadersInNotificationsEnabled;

trait SetIdentityHeadersInNotificationsEnabledTrait
{
    /**
     * @param SetIdentityHeadersInNotificationsEnabledRequest $args
     * @return SetIdentityHeadersInNotificationsEnabledResponse
     */
    public function setIdentityHeadersInNotificationsEnabled(SetIdentityHeadersInNotificationsEnabledRequest $args)
    {
        $result = parent::setIdentityHeadersInNotificationsEnabled($args->toArray());
        return new SetIdentityHeadersInNotificationsEnabledResponse($result->toArray());
    }
}
