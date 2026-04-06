<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant;

class ConnectParticipantClient extends \Aws\ConnectParticipant\ConnectParticipantClient
{
    use CompleteAttachmentUpload\CompleteAttachmentUploadTrait;
    use CreateParticipantConnection\CreateParticipantConnectionTrait;
    use DisconnectParticipant\DisconnectParticipantTrait;
    use GetAttachment\GetAttachmentTrait;
    use GetTranscript\GetTranscriptTrait;
    use SendEvent\SendEventTrait;
    use SendMessage\SendMessageTrait;
    use StartAttachmentUpload\StartAttachmentUploadTrait;
}
