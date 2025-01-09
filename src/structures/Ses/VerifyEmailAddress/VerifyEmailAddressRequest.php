<?php

namespace Sunaoka\Aws\Structures\Ses\VerifyEmailAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 */
class VerifyEmailAddressRequest extends Request
{
    /**
     * @param array{EmailAddress: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
