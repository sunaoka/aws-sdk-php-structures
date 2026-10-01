<?php

namespace Sunaoka\Aws\Structures\Account\VerifyPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property string $Otp
 */
class VerifyPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Otp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
