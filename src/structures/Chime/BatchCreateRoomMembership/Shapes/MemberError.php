<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateRoomMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MemberId
 * @property 'BadRequest'|'Conflict'|'Forbidden'|'NotFound'|'PreconditionFailed'|'ResourceLimitExceeded'|'ServiceFailure'|'AccessDenied'|'ServiceUnavailable'|'Throttled'|'Throttling'|'Unauthorized'|'Unprocessable'|'VoiceConnectorGroupAssociationsExist'|'PhoneNumberAssociationsExist' $ErrorCode
 * @property string $ErrorMessage
 */
class MemberError extends Shape
{
    /**
     * @param array{
     *     MemberId?: string,
     *     ErrorCode?: 'BadRequest'|'Conflict'|'Forbidden'|'NotFound'|'PreconditionFailed'|'ResourceLimitExceeded'|'ServiceFailure'|'AccessDenied'|'ServiceUnavailable'|'Throttled'|'Throttling'|'Unauthorized'|'Unprocessable'|'VoiceConnectorGroupAssociationsExist'|'PhoneNumberAssociationsExist',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
