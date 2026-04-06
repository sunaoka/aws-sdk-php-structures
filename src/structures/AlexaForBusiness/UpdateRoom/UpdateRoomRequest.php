<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RoomArn
 * @property string|null $RoomName
 * @property string|null $Description
 * @property string|null $ProviderCalendarId
 * @property string|null $ProfileArn
 */
class UpdateRoomRequest extends Request
{
    /**
     * @param array{
     *     RoomArn?: string|null,
     *     RoomName?: string|null,
     *     Description?: string|null,
     *     ProviderCalendarId?: string|null,
     *     ProfileArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
