<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings;

class ChimeSDKMeetingsClient extends \Aws\ChimeSDKMeetings\ChimeSDKMeetingsClient
{
    use BatchCreateAttendee\BatchCreateAttendeeTrait;
    use BatchUpdateAttendeeCapabilitiesExcept\BatchUpdateAttendeeCapabilitiesExceptTrait;
    use CreateAttendee\CreateAttendeeTrait;
    use CreateMeeting\CreateMeetingTrait;
    use CreateMeetingWithAttendees\CreateMeetingWithAttendeesTrait;
    use DeleteAttendee\DeleteAttendeeTrait;
    use DeleteMeeting\DeleteMeetingTrait;
    use GetAttendee\GetAttendeeTrait;
    use GetMeeting\GetMeetingTrait;
    use ListAttendees\ListAttendeesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartMeetingTranscription\StartMeetingTranscriptionTrait;
    use StopMeetingTranscription\StopMeetingTranscriptionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAttendeeCapabilities\UpdateAttendeeCapabilitiesTrait;
}
