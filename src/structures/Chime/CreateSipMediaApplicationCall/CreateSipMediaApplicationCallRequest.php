<?php

namespace Sunaoka\Aws\Structures\Chime\CreateSipMediaApplicationCall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FromPhoneNumber
 * @property string $ToPhoneNumber
 * @property string $SipMediaApplicationId
 * @property array<string, string>|null $SipHeaders
 */
class CreateSipMediaApplicationCallRequest extends Request
{
    /**
     * @param array{
     *     FromPhoneNumber: string,
     *     ToPhoneNumber: string,
     *     SipMediaApplicationId: string,
     *     SipHeaders?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
