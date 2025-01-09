<?php

namespace Sunaoka\Aws\Structures\Ses\VerifyEmailIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddress
 */
class VerifyEmailIdentityRequest extends Request
{
    /**
     * @param array{EmailAddress: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
