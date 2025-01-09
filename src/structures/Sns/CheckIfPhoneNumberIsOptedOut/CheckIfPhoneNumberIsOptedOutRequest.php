<?php

namespace Sunaoka\Aws\Structures\Sns\CheckIfPhoneNumberIsOptedOut;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $phoneNumber
 */
class CheckIfPhoneNumberIsOptedOutRequest extends Request
{
    /**
     * @param array{phoneNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
