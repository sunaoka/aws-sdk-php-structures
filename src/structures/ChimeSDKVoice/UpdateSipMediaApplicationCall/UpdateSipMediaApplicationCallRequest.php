<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateSipMediaApplicationCall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property string $TransactionId
 * @property array<string, string> $Arguments
 */
class UpdateSipMediaApplicationCallRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId: string,
     *     TransactionId: string,
     *     Arguments: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
