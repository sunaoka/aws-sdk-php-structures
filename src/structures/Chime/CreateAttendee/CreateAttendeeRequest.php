<?php

namespace Sunaoka\Aws\Structures\Chime\CreateAttendee;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $ExternalUserId
 * @property list<Shapes\Tag> $Tags
 */
class CreateAttendeeRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     ExternalUserId: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
