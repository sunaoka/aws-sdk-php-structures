<?php

namespace Sunaoka\Aws\Structures\Pinpoint\VerifyOTPMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\VerifyOTPMessageRequestParameters $VerifyOTPMessageRequestParameters
 */
class VerifyOTPMessageRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     VerifyOTPMessageRequestParameters: Shapes\VerifyOTPMessageRequestParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
