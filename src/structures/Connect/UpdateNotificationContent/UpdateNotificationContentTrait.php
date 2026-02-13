<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateNotificationContent;

trait UpdateNotificationContentTrait
{
    /**
     * @param UpdateNotificationContentRequest $args
     * @return UpdateNotificationContentResponse
     */
    public function updateNotificationContent(UpdateNotificationContentRequest $args)
    {
        $result = parent::updateNotificationContent($args->toArray());
        return new UpdateNotificationContentResponse($result->toArray());
    }
}
