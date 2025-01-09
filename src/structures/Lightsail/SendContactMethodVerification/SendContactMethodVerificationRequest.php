<?php

namespace Sunaoka\Aws\Structures\Lightsail\SendContactMethodVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Email' $protocol
 */
class SendContactMethodVerificationRequest extends Request
{
    /**
     * @param array{protocol: 'Email'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
