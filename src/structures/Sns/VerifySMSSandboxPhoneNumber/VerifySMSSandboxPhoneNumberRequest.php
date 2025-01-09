<?php

namespace Sunaoka\Aws\Structures\Sns\VerifySMSSandboxPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumber
 * @property string $OneTimePassword
 */
class VerifySMSSandboxPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumber: string,
     *     OneTimePassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
