<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\BatchCreateAttendee\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExternalUserId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class CreateAttendeeError extends Shape
{
    /**
     * @param array{
     *     ExternalUserId?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
