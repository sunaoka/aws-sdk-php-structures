<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SMS'|'TOTP'> $MfaTypes
 * @property string $SmsMessage
 */
class Settings extends Shape
{
    /**
     * @param array{
     *     MfaTypes?: list<'SMS'|'TOTP'>,
     *     SmsMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
