<?php

namespace Sunaoka\Aws\Structures\Sns\OptInPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $phoneNumber
 */
class OptInPhoneNumberRequest extends Request
{
    /**
     * @param array{phoneNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
