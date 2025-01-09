<?php

namespace Sunaoka\Aws\Structures\Pinpoint\VerifyOTPMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationIdentity
 * @property string $Otp
 * @property string $ReferenceId
 */
class VerifyOTPMessageRequestParameters extends Shape
{
    /**
     * @param array{
     *     DestinationIdentity: string,
     *     Otp: string,
     *     ReferenceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
