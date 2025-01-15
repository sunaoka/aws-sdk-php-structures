<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\BatchCreateAttendee\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExternalUserId
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class CreateAttendeeError extends Shape
{
    /**
     * @param array{
     *     ExternalUserId?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
