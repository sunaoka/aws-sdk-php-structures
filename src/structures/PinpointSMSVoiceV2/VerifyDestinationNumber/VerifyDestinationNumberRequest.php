<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\VerifyDestinationNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedDestinationNumberId
 * @property string $VerificationCode
 */
class VerifyDestinationNumberRequest extends Request
{
    /**
     * @param array{
     *     VerifiedDestinationNumberId: string,
     *     VerificationCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
