<?php

namespace Sunaoka\Aws\Structures\Account\AcceptPrimaryEmailUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $PrimaryEmail
 * @property string $Otp
 */
class AcceptPrimaryEmailUpdateRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PrimaryEmail: string,
     *     Otp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
