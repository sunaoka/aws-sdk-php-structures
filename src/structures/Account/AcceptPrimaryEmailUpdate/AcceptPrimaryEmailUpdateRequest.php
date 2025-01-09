<?php

namespace Sunaoka\Aws\Structures\Account\AcceptPrimaryEmailUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Otp
 * @property string $PrimaryEmail
 */
class AcceptPrimaryEmailUpdateRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Otp: string,
     *     PrimaryEmail: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
