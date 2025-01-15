<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeetingWithAttendees;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Meeting|null $Meeting
 * @property list<Shapes\Attendee>|null $Attendees
 * @property list<Shapes\CreateAttendeeError>|null $Errors
 */
class CreateMeetingWithAttendeesResponse extends Response
{
}
