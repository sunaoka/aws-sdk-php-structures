<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventId
 * @property 'SignIn'|'SignUp'|'ForgotPassword'|'PasswordChange'|'ResendCode'|null $EventType
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property 'Pass'|'Fail'|'InProgress'|null $EventResponse
 * @property EventRiskType|null $EventRisk
 * @property list<ChallengeResponseType>|null $ChallengeResponses
 * @property EventContextDataType|null $EventContextData
 * @property EventFeedbackType|null $EventFeedback
 */
class AuthEventType extends Shape
{
    /**
     * @param array{
     *     EventId?: string|null,
     *     EventType?: 'SignIn'|'SignUp'|'ForgotPassword'|'PasswordChange'|'ResendCode'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     EventResponse?: 'Pass'|'Fail'|'InProgress'|null,
     *     EventRisk?: EventRiskType|null,
     *     ChallengeResponses?: list<ChallengeResponseType>|null,
     *     EventContextData?: EventContextDataType|null,
     *     EventFeedback?: EventFeedbackType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
