<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateRoom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoomName
 * @property string|null $Description
 * @property string|null $ProfileArn
 * @property string|null $ProviderCalendarId
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateRoomRequest extends Request
{
    /**
     * @param array{
     *     RoomName: string,
     *     Description?: string|null,
     *     ProfileArn?: string|null,
     *     ProviderCalendarId?: string|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
