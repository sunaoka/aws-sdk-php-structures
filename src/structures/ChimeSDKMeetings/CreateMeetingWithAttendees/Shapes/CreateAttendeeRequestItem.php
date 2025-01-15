<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeetingWithAttendees\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExternalUserId
 * @property AttendeeCapabilities|null $Capabilities
 */
class CreateAttendeeRequestItem extends Shape
{
    /**
     * @param array{
     *     ExternalUserId: string,
     *     Capabilities?: AttendeeCapabilities|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
