<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ValidateNotifyCodeVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $destinationIdentity
 * @property string|null $referenceId
 * @property string $code
 */
class ValidateNotifyCodeVerificationRequest extends Request
{
    /**
     * @param array{
     *     destinationIdentity: string,
     *     referenceId?: string|null,
     *     code: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
