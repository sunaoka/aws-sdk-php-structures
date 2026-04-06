<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SendAnnouncement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $RoomFilters
 * @property Shapes\Content $Content
 * @property int<1, 3600>|null $TimeToLiveInSeconds
 * @property string $ClientRequestToken
 */
class SendAnnouncementRequest extends Request
{
    /**
     * @param array{
     *     RoomFilters: list<Shapes\Filter>,
     *     Content: Shapes\Content,
     *     TimeToLiveInSeconds?: int<1, 3600>|null,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
