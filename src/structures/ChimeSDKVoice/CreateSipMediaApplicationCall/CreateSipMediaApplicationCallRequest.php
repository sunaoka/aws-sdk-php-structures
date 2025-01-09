<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateSipMediaApplicationCall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FromPhoneNumber
 * @property string $ToPhoneNumber
 * @property string $SipMediaApplicationId
 * @property array<string, string> $SipHeaders
 * @property array<string, string> $ArgumentsMap
 */
class CreateSipMediaApplicationCallRequest extends Request
{
    /**
     * @param array{
     *     FromPhoneNumber: string,
     *     ToPhoneNumber: string,
     *     SipMediaApplicationId: string,
     *     SipHeaders?: array<string, string>,
     *     ArgumentsMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
