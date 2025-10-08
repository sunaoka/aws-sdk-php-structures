<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityNotificationTopic;

trait SetIdentityNotificationTopicTrait
{
    /**
     * @param SetIdentityNotificationTopicRequest $args
     * @return SetIdentityNotificationTopicResponse
     */
    public function setIdentityNotificationTopic(SetIdentityNotificationTopicRequest $args)
    {
        $result = parent::setIdentityNotificationTopic($args->toArray());
        return new SetIdentityNotificationTopicResponse($result->toArray());
    }
}
