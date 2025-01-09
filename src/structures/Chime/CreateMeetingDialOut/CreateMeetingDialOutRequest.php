<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeetingDialOut;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $FromPhoneNumber
 * @property string $ToPhoneNumber
 * @property string $JoinToken
 */
class CreateMeetingDialOutRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     FromPhoneNumber: string,
     *     ToPhoneNumber: string,
     *     JoinToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
