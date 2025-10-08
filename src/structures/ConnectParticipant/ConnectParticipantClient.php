<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant;

class ConnectParticipantClient extends \Aws\ConnectParticipant\ConnectParticipantClient
{
    use CancelParticipantAuthentication\CancelParticipantAuthenticationTrait;
    use CompleteAttachmentUpload\CompleteAttachmentUploadTrait;
    use CreateParticipantConnection\CreateParticipantConnectionTrait;
    use DescribeView\DescribeViewTrait;
    use DisconnectParticipant\DisconnectParticipantTrait;
    use GetAttachment\GetAttachmentTrait;
    use GetAuthenticationUrl\GetAuthenticationUrlTrait;
    use GetTranscript\GetTranscriptTrait;
    use SendEvent\SendEventTrait;
    use SendMessage\SendMessageTrait;
    use StartAttachmentUpload\StartAttachmentUploadTrait;
}
