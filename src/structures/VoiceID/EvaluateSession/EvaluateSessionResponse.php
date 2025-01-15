<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AuthenticationResult|null $AuthenticationResult
 * @property string|null $DomainId
 * @property Shapes\FraudDetectionResult|null $FraudDetectionResult
 * @property string|null $SessionId
 * @property string|null $SessionName
 * @property 'PENDING_CONFIGURATION'|'ONGOING'|'ENDED'|null $StreamingStatus
 */
class EvaluateSessionResponse extends Response
{
}
