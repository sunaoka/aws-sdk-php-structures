<?php

namespace Sunaoka\Aws\Structures\Chime\RestorePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 */
class RestorePhoneNumberRequest extends Request
{
    /**
     * @param array{PhoneNumberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
