<?php

namespace Sunaoka\Aws\Structures\Sns\DeleteSMSSandboxPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumber
 */
class DeleteSMSSandboxPhoneNumberRequest extends Request
{
    /**
     * @param array{PhoneNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
