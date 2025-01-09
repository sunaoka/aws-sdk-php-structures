<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property 'SignIn'|'SignUp'|'ForgotPassword'|'PasswordChange'|'ResendCode' $EventType
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property 'Pass'|'Fail'|'InProgress' $EventResponse
 * @property EventRiskType $EventRisk
 * @property list<ChallengeResponseType> $ChallengeResponses
 * @property EventContextDataType $EventContextData
 * @property EventFeedbackType $EventFeedback
 */
class AuthEventType extends Shape
{
    /**
     * @param array{
     *     EventId?: string,
     *     EventType?: 'SignIn'|'SignUp'|'ForgotPassword'|'PasswordChange'|'ResendCode',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     EventResponse?: 'Pass'|'Fail'|'InProgress',
     *     EventRisk?: EventRiskType,
     *     ChallengeResponses?: list<ChallengeResponseType>,
     *     EventContextData?: EventContextDataType,
     *     EventFeedback?: EventFeedbackType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
