<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SMS'|'TOTP'>|null $MfaTypes
 * @property string|null $SmsMessage
 */
class Settings extends Shape
{
    /**
     * @param array{
     *     MfaTypes?: list<'SMS'|'TOTP'>|null,
     *     SmsMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
