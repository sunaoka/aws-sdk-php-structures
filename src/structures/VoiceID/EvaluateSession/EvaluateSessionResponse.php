<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AuthenticationResult $AuthenticationResult
 * @property string $DomainId
 * @property Shapes\FraudDetectionResult $FraudDetectionResult
 * @property string $SessionId
 * @property string $SessionName
 * @property 'PENDING_CONFIGURATION'|'ONGOING'|'ENDED' $StreamingStatus
 */
class EvaluateSessionResponse extends Response
{
}
