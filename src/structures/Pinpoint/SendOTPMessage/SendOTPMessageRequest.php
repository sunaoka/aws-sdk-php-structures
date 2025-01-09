<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendOTPMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\SendOTPMessageRequestParameters $SendOTPMessageRequestParameters
 */
class SendOTPMessageRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SendOTPMessageRequestParameters: Shapes\SendOTPMessageRequestParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
