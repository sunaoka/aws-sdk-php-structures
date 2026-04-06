<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetRoom\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoomArn
 * @property string|null $RoomName
 * @property string|null $Description
 * @property string|null $ProviderCalendarId
 * @property string|null $ProfileArn
 */
class Room extends Shape
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
