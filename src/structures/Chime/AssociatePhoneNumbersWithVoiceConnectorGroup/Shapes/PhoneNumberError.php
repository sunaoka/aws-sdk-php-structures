<?php

namespace Sunaoka\Aws\Structures\Chime\AssociatePhoneNumbersWithVoiceConnectorGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberId
 * @property 'BadRequest'|'Conflict'|'Forbidden'|'NotFound'|'PreconditionFailed'|'ResourceLimitExceeded'|'ServiceFailure'|'AccessDenied'|'ServiceUnavailable'|'Throttled'|'Throttling'|'Unauthorized'|'Unprocessable'|'VoiceConnectorGroupAssociationsExist'|'PhoneNumberAssociationsExist' $ErrorCode
 * @property string $ErrorMessage
 */
class PhoneNumberError extends Shape
{
    /**
     * @param array{
     *     PhoneNumberId?: string,
     *     ErrorCode?: 'BadRequest'|'Conflict'|'Forbidden'|'NotFound'|'PreconditionFailed'|'ResourceLimitExceeded'|'ServiceFailure'|'AccessDenied'|'ServiceUnavailable'|'Throttled'|'Throttling'|'Unauthorized'|'Unprocessable'|'VoiceConnectorGroupAssociationsExist'|'PhoneNumberAssociationsExist',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
