<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SendAnnouncement;

trait SendAnnouncementTrait
{
    /**
     * @param SendAnnouncementRequest $args
     * @return SendAnnouncementResponse
     */
    public function sendAnnouncement(SendAnnouncementRequest $args)
    {
        $result = parent::sendAnnouncement($args->toArray());
        return new SendAnnouncementResponse($result->toArray());
    }
}
